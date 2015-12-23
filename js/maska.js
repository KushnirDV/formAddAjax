    var sname = "";
    var name = "";	
    var fathername = "";	
    var mail = "";
    var mob;
    var cntn = "";
    var img = "";

    function setSurname(str) {
            surname.onblur = function() {
            if (isNaN(this.value)) { 
                            return sname = str;
                    }
            }
    } 
    function setName(str) {
            nname.onblur = function() {
            if (isNaN(this.value)) { 
                            return name = str;
                    }
            }
    }
    function setFathername(str) {
            fname.onblur = function() {
            if (isNaN(this.value)) { 
                            return fathername = str;
                    }
            }
    }
    function setEmail(str) {
            kdv_email.onblur = function() {
            if (isNaN(this.value)) { 
                            return mail = str;
                    }
            }
    }
    function setPhone(str) {
            phone.onblur = function() {
            if (isNaN(this.value)) { 
                            return mob = str;
                    }
            }
    }
    function setCont(str) {
            encHts.onblur = function() {
            if (isNaN(this.value)) { 
                            return cntn = str;
                    }
            }
    }
    function setImgName(str) {
        if (isNaN(this.value)) {
            return img = str;
        }

    }

                
jQuery(function(){

    (function($){

        jQuery(function($){
            $("#phone").mask("+38 (999) 999-99-99");
        });
        $("#btn_reg").click(function() {
            if(document.getElementById('img_file_name').value != ''){
                img = document.getElementById('img_file_name').value;
            }else{
                img = "avatar_64x64.jpg";
            }
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("adapt-coll").innerHTML = xmlhttp.responseText;
                    document.getElementById("surname").value = '';
                    document.getElementById("nname").value = '';
                    document.getElementById("fname").value = '';
                    document.getElementById("phone").value = '';
                    document.getElementById("kdv_email").value = '';
                    document.getElementById("encHts").value = '';
                }
            };
            xmlhttp.open("POST", "form.php", true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send("set=go&surname="+sname+"&name="+name+"&fathername="+fathername+"&email="+mail+"&mobtel="+mob+"&cont="+cntn+"&img="+img);
        });

    })(jQuery);

});


























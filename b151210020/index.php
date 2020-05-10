<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO | Kayıt & Giriş</title>
</head>
<body>

    <!-- Kayıt Formu -->
    <form action="kayit.php" name="myForm" method="post" id="form_id" onsubmit="return validateForm()">
        <label for="">Kullanıcı Adı</label> <br>
        <input type="text" name="kullanici_adi"> <br>
        <label for="">Şifre</label> <br>
        <input type="password" name="sifre"> <br> <br>
        <button>Kayıt Ol</button>
    </form>
    <script>
        function validateForm(){
            var x =document.forms["myForm"]["kullanici_adi"].value;
            if (x=="") {
                alert("Lütfen isim kısmını boş geçmeyiniz!");
                return false;
            }
            var y =document.forms["myForm"]["sifre"].value;
            if (y=="") {
                alert("Lütfen sifre kısmını boş geçmeyiniz!");
                return false;
            }
            var z =document.forms["myForm"]["kullanici_adi"].value;
            var i;
            for (i = 0; i < 20;i++) {
                if (z[i]=="@") {
                }if(i=19){
                    alert("Lütfen mail giriniz!");
                    return false;
                }

            }

        }



    </script>
</body>

</html>
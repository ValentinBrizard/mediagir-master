<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    <script>
        function validateForm() {
            let name = document.forms["myForm"]["name"];
            let email = document.forms["myForm"]["email"];
            let message = document.forms["myForm"]["message"];

            if (name.value == "") {
                document.getElementById('errorname').innerHTML = "Veuillez entrez un nom valide";
                name.focus();
                return false;
            } else {
                document.getElementById('errorname').innerHTML = "";
            }

            if (email.value == "") {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            } else {
                document.getElementById('erroremail').innerHTML = "";
            }

            if (email.value.indexOf("@", 0) < 0) {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0) {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            }

            if (message.value == "") {
                document.getElementById('errormsg').innerHTML = "Veuillez entrez un message valide";
                message.focus();
                return false;
            } else {
                document.getElementById('errormsg').innerHTML = "";
            }

            return true;
        }
    </script>
    <h1>Vous permettre de nous contacter</h1>
    <form name="myForm" action="" onsubmit="return validateForm()" method="post">
        <table class="form-style">
            <tr>
                <td>
                    <label>
                        Votre nom <span class="required">*</span>
                    </label>
                </td>
                <td>
                    <input type="text" name="name" class="long" />
                    <span class="error" id="errorname"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Votre adresse e-mail <span class="required">*</span>
                    </label>
                </td>
                <td>
                    <input type="email" name="email" class="long" />
                    <span class="error" id="erroremail"></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        Message <span class="required">*</span>
                    </label>
                </td>
                <td>
                    <textarea name="message" class="long field-textarea"></textarea>
                    <span class="error" id="errormsg"></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Envoyer">
                    <input type="reset" value="Réinitialiser">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
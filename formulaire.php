<!doctype html>
<html>
<head>
<title>formulaire</title>
<meta >
<meta charset="UTF-8"/>
</head>

<body>
    <h1>Form</h1>
<!--method get-->

<!--metohd post plus securiser que GET-->   
<form name="FimpotsZ" method="POST" action="zorglub.php">
    <fieldset>
        <legend>Informations</legend>
            <p>
                <label for="Genre">Merci de choisir votre sexe : </label>

                <select id="Genre" name="genre">
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                </select>
            </p>

            <p>
                <label>Age : </label><input type="text" name="age" placeholder="tapez votre age !"/>
            </p>
        
            <p>
                <input type="submit" name="envoyer" value="envoyer"/>
            </P>        
    </fieldset>
</form>

    



</body>

</html>
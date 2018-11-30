<!DOCTYPE HTML>
<head>
 <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
<title> Formulaire html</title>
</head>

<body>
<header>
    <div align="center" id="header">
            <h1>Formulaire PickMyClub:</h1>
            <br /><br /><br />
            <p1> Maintenant, entres tes informations :</p1>
    </div>
</header>
<br /> 
<form action="/my-handling-form-page" method="post">
   <div id="formulaire">
    <div>
        <label for="name">Pseudo</label>
        <input type="text" id="name" name="user_name">
    </div>
    
     <div>
        <label for="tel">Téléphone:</label>
        <input type="text" id="tel" name="telephone">
    </div>
    
     <div>
        <label for="mail">E-mail:</label>
        <input type="text" id="mail" name="mail">
    </div>
    
    <div>
        <label for="mdp">Mot de passe:</label>
         <input type="password" id="motdepasse" name="mdp">
    </div>
    <div>
        <label for="confirmation">confirme ton mot de passe:</label>
        <input type="password" id="mdpconfirm" name="confirm">
    </div>
    <div align="center">
    <section>
    <h2>Comment nous as tu connu?</h2>
    <p>
      <label for="ref">
        <span>Référence:</span>
      </label>
      <select id="reseau" name="pannel">
        <option value="rc">Réseaux sociaux</option>
        <option value="media">Médias</option>
        <option value="familyorother">Entourage</option>
      </select>
        </p>
</section>
    </div>
    </div>
    
    <div align="center">
        <input id="btnInscription" type="submit" value="Devenir membre" />
    </div>
</form> 

<style>
    #btnInscription{
        background-color: darkgray;
        border-color: aliceblue;
    }
    
#formulaire{
  margin: 0 auto;
  width: 400px;
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}
form div + div {
  margin-top: 1em;
}
label {
  display: inline-block;
  width: 90px;
  text-align: right;
}
input, textarea {
  font: 1em sans-serif;
  width: 300px;
  box-sizing: border-box;
  border: 1px solid #999;
  border-color: rosybrown;
  background-color: burlywood;
}
input:focus, textarea:focus {
  border-color: #000;
}
textarea {
  vertical-align: top;
  height: 5em;
}
.button {
  padding-left: 90px; 
}
button {
  margin-left: .5em;
}
    label {
  display: inline-block;
  width: 90px;
  text-align: right;
}
</style>

</body>
<form action="addcontact.php" method="post">
    <div>
        <label for="surname">Nom<span style="color:red"></span> :</label><br>
        <input type="text" name="surname" aria-label="nom" id="nom" required><br><br>
    </div>
    <div>
        <label for="name">Prénom<span style="color:red"></span> :</label><br>
        <input type="text" name="name" aria-label="prenom" id="prenom" required><br><br>
    </div>
    <div>
        <label for="mail">E-mail<span style="color:red"></span> :</label><br>
        <input type="email" name="mail" aria-label="mail" id="mail" placeholder="exemple@mail.com" required><br><br>
    </div>
    <div>
        <label for="message">Message<span style="color:red"></span> :</label><br>
        <textarea name="message" id="message" rows="10" placeholder="Mes chers Omniscients..." maxlenght="250" required></textarea>
    </div>
    <input type="submit" value="ENVOYER" class="envoyer" id="ENVOIE">
</form>
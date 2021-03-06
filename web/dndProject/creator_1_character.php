<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/logoIcon.ico" type="image/gif" sizes="16x16">
        <title>Ashardalon - Create a New Character</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
            integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/dndMain.css">
        <link rel="stylesheet" href="css/basic.css">
    </head>
    <body class="container-fluid">

        <div class="row space-1">
            <div class="col-xs-1">
                <img src="img/logo.png" alt="">
            </div>
            <h1 class="col-xs-10 center">Ashardalon Character Creator</h1>
            <div class="col-xs-1">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="row">
            <p class="col-xs-12 center">First lets decide on your race and class.</p>
        </div>

        <div class="row">

            <div class="createBox col-xs-8 col-xs-offset-2 space-4">
                <form id="createCharacter" action="php/createCharacter1.php" method="post">
                    <div class="form-group col-xs-12 space-2">
                        <label for="characterName" class="creatorLabel">Character Name</label>
                        <input type="text" class="form-control" id="" name="characterName" placeholder="Character Name">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="raceChoice" class="creatorLabel">Select list:</label>
                        <select class="form-control" id="raceChoice" name="raceChoice">
                            <option>Dragonborn</option>
                            <option>Dwarf</option>
                            <option>Elf</option>
                            <option>Gnome</option>
                            <option>Half-Elf</option>
                            <option>Halfling</option>
                            <option>Half-Orc</option>
                            <option>Human</option>
                            <option>Tiefling</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="classChoice" class="creatorLabel">Select list:</label>
                        <select class="form-control" id="classChoice" name="classChoice">
                            <option>Barbarian</option>
                            <option>Bard</option>
                            <option>Cleric</option>
                            <option>Druid</option>
                            <option>Fighter</option>
                            <option>Paladin</option>
                            <option>Ranger</option>
                            <option>Rogue</option>
                            <option>Sorcerer</option>
                            <option>Warlock</option>
                            <option>Wizard</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <button type="submit" class="btn btn-default col-xs-4 col-xs-offset-4 space-3">Next</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </body>
</html>

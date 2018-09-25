
<html>
    <head>
        <title>Health care system</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="donator">
            <div class ="form">
                <form class="donator-form" action="register.php" method="post">
                    <h1>Donation particulars</h1>
                    First Name:<sup>*</sup> <input type="text" name="firstname" placeholder="Enter your firstname"/>
                    Last Name:<sup>*</sup><input type="text" name="lastname" placeholder="Enter your surname"/>
                    Alien Id:<sup>*</sup><input type="text" name="alien_id" placeholder="Enter natioanl identity card"/>
                    County:<sup>*</sup>
                    <select>
                        <option value="volvo"></option>
                        <option value="volvo">Nairobi</option>
                        <option value="saab">Nakuru</option>
                        <option value="opel">Machakos</option>
                        <option value="audi">Garisa</option>
                    </select>
                    Amount:<sup>*</sup><input type="text" name="amount" placeholder="Enter your amount here"/>
                    Date:<sup>*</sup><input type="date" name="d_date" placeholder="Enter donation date">
                    <button type="submit" name="submit" value="submit">Submit</button>
                </form>

            </div>

        </div>
    </body>
</html>

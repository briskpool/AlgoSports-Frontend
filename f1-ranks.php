<script>
    const get_race = {
        "async": true,
        "crossDomain": true,
        "url": "https://api-formula-1.p.rapidapi.com/races?competition=15&season=2021",
        "method": "GET",
        "headers": {
            "x-rapidapi-host": "api-formula-1.p.rapidapi.com",
            "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0"
        }
    };
    let race_id;
    $.ajax(get_race).done(function(response) {
        for (var i = 0; i < response.response.length; i++) {
            var race_type = response.response[i].type;
            if (race_type.toLowerCase() == 'race') {
                race_id = response.response[i].id;
                competition_name = response.response[i].competition.name;
                $('#competition_name').text(competition_name)
            }
        }
        const race_rankings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api-formula-1.p.rapidapi.com/rankings/races?race=" + race_id,
            "method": "GET",
            "headers": {
                "x-rapidapi-host": "api-formula-1.p.rapidapi.com",
                "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0"
            }
        };

        $.ajax(race_rankings).done(function(response) {
            rankings = response.response;
            // console.log(rankings)
            standing_table = '<thead>' +
                '<tr class="">' +
                '<th class="px-3" style="color: #91288f; width:20px;">Position</th>' +
                '<th class="px-3" style="color: #91288f" colspan=2>Driver</th>' +
                '<th class="px-3" style="color: #91288f">Team</th>' +
                '<th class="px-3" style="color: #91288f">Time</th>' +
                '</tr>' +
                '</thead>' +
                '<tbody id="standings">' +

                '</tbody>';
            // $('#standings').css('font-family', 'Roboto');
            $('#standing_table').html(standing_table);

            for (i = 0; i < 20; i++) {

                position = rankings[i].position;
                driver_name = rankings[i].driver.name;
                // console.log(driver_name)
                driver_image = rankings[i].driver.image;
                if (driver_name == 'Yuki Tsunoda') {
                    driver_image = "https://accounts.blockchainalgorithms.co/images/1617101457751.jpg";
                } else if (driver_name == 'Sergio Perez') {
                    driver_image = "https://accounts.blockchainalgorithms.co/images/Sergio_Pérez.jpg";
                } else if (driver_name == 'Nicholas Latifi') {
                    driver_image = "https://accounts.blockchainalgorithms.co/images/Nicholas Latifi.jpg";
                } else if (driver_name == 'Mick Schumacher') {
                    driver_image = "https://accounts.blockchainalgorithms.co/images/Mick-Schumacher.jpg";
                } else if (driver_name == 'Nikita Mazepin') {
                    driver_image = "https://accounts.blockchainalgorithms.co/images/Nikita Mazepin.jpg";
                }
                team_name = rankings[i].team.name;


                time = rankings[i].time == null ? 'Scheduled' : rankings[i].time;
                // console.log(rankings[i].driver.name)

                // $.ajax({
                //     "url": "/get-driver-images/" + rankings[i].driver.name,
                //     type: "Get",
                //     success: function(res) {
                //        console.log(res)
                //     }
                // });




                output_standings =

                    '<tr>' +
                    '<td class="align-middle" style="color: rgb(17, 17, 17);">' + position + '</td>' +
                    '<td class="align-middle" class="align-middle" style="color: rgb(17, 17, 17);">' +
                    '<img src="' + driver_image + '" alt="" width="40px" />' +
                    '</td>' +
                    '<td class="align-middle" style="color: rgb(17, 17, 17);">' + driver_name + '</td>' +
                    '<td class="align-middle" style="color: rgb(17, 17, 17);">' + team_name + '</td>' +
                    '<td class="align-middle" style="color: rgb(17, 17, 17);">' + time + '</td>' +
                    '</tr>';
                $('#standings').append(output_standings);
            }

        });
    });
</script>
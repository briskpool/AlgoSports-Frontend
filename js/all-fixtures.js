const all = {
    "async": true,
    "crossDomain": true,
    "url": "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=39&season=2021",
    "method": "GET",
    "headers": {
        "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
        "x-rapidapi-host": "api-football-v1.p.rapidapi.com"
    }
};
$.ajax(all).done(function(response) {
            data = response.response;
            console.log(data);
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            for (i = 0; i < data.length; i++) {
                league = data[i].league.name;
                date = data[i].fixture.date;
                formated_date = new Date(date);
                minutes = '';
                if (formated_date.getMinutes() < 10) {
                    minutes = '0' + formated_date.getMinutes();
                } else {
                    minutes = formated_date.getMinutes();
                }
                // console.log(minutes);
                match_date = months[formated_date.getMonth()] + ' ' + formated_date.getDate() + ', ' + formated_date.getHours() + ':' + minutes;
                venue = data[i].fixture.venue.name;
                 status = data[i].fixture.status.short;
                home_team = data[i].teams.home.name;
                home_team_logo = data[i].teams.home.logo;
                away_team = data[i].teams.away.name;
                away_team_logo = data[i].teams.away.logo;

                home_goal =data[i].goals.home;
                away_goal =data[i].goals.away;
                goals='';
                if(home_goal==null && away_goal==null){
                    goals='VS';
                }else{
                    goals = home_goal+'-'+away_goal;
                }


                // if (home_goal==Null && away_goal == Null){
                //     console.log('VS');
                // }
                // May 10, 11:00
                // output_all='';  
                output_all =
                   
                    '<div class="col-xl-4 mb-3">' +

                    '<div class="card shadow fadeIn wow animated delay-1 animated animated animated" style="visibility: visible; animation-name: fadeIn;">' +

                    '<div class="card-body py-4">' +

                    '<div class="items text-center">' +
                    '<div class="text-center">' +
                    '<div class="text-muted">' + status + '</div>' +
                    '<div class="text-dark font-weight-bold">' + match_date + '</div>' +

                    '</div>' +
                    '<div class="d-flex justify-content-between">' +
                    '<div class="d-flex  align-items-center" title="'+home_team+'">' +
                    '<img src="' + home_team_logo + '" style="max-height: 60px" alt="'+home_team+'">' +
                    '<div class="pl-2">' +
                    // '<h5 class="font-weight-bold mb-0 text-muted">'+home_team.substring(0,4)+'</h5>'+
                    '</div>' +
                    '</div>' +
                    '<div class="d-flex align-items-center">' +
                    '<h2 class="text-dark mb-0">'+goals+'</h2>' +
                    '</div>' +
                    '<div class="d-flex align-items-center" title="'+away_team+'">' +
                    '<div class="pr-2">' +
                    // '<h5 class="font-weight-bold mb-0 text-muted">'+away_team.substring(0,4)+'</h5>'+
                    '</div>' +
                    '<img src="' + away_team_logo + '" style="max-height: 60px" alt="'+away_team+'">' +
                    '</div>' +
                    '</div>' +
                    '<div class="text-center text-muted">' + league + '</div>' +
                    '</div>' +

                    '</div>' +

                    '</div>' +

                    '</div>';
                    

                $('#all_fixtures').append(output_all);

            }


        });



      
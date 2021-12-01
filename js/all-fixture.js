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
            
            all_fixtures = [];
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            for (i = 0; i < data.length; i++) {
                date = data[i].fixture.date;
                formated_date = new Date(date);
                minutes = '';
                if (formated_date.getMinutes() < 10) {
                    minutes = '0' + formated_date.getMinutes();
                } else {
                    minutes = formated_date.getMinutes();
                }
               
                match_date = months[formated_date.getMonth()] + ' ' + formated_date.getDate() + ', ' + formated_date.getHours() + ':' + minutes;
                goals='';
                
                all_fixtures.push([
                    data[i].teams.home.name,
                    data[i].teams.away.name,
                    data[i].teams.home.logo,
                    data[i].teams.away.logo,
                    match_date,
                    data[i].fixture.timestamp,
                    data[i].fixture.status.short,
                    data[i].goals.home,
                    data[i].goals.away,
                    data[i].league.name,
                ]);
                
                
                all_fixtures.sort(function(a, b){
                    return a[5] - b[5];
                });
            }
                
           

            for(var i in all_fixtures){
                if(all_fixtures[i][7]==null && all_fixtures[i][8]==null){
                    goals='VS';
                }else{
                    goals = all_fixtures[i][7]+'-'+all_fixtures[i][8];
                }

                output_all =
                   
                    '<div class="col-xl-4 mb-3">' +

                    '<div class="card shadow fadeIn wow animated delay-1 animated animated animated" style="visibility: visible; animation-name: fadeIn;">' +

                    '<div class="card-body py-4">' +

                    '<div class="items text-center">' +
                    '<div class="text-center">' +
                    '<div class="text-muted">' + all_fixtures[i][6] + '</div>' +
                    '<div class="text-dark font-weight-bold">' + all_fixtures[i][4] + '</div>' +

                    '</div>' +
                    '<div class="d-flex justify-content-between">' +
                    '<div class="d-flex  align-items-center" title="'+all_fixtures[i][0]+'">' +
                    '<img src="' + all_fixtures[i][2] + '" style="max-height: 60px" alt="'+all_fixtures[i][0]+'">' +
                    '<div class="pl-2">' +
                    '</div>' +
                    '</div>' +
                    '<div class="d-flex align-items-center">' +
                    '<h2 class="text-dark mb-0">'+goals+'</h2>' +
                    '</div>' +
                    '<div class="d-flex align-items-center" title="'+all_fixtures[i][1]+'">' +
                    '<div class="pr-2">' +
                    '</div>' +
                    '<img src="' + all_fixtures[i][3] + '" style="max-height: 60px" alt="'+all_fixtures[i][1]+'">' +
                    '</div>' +
                    '</div>' +
                    '<div class="text-center text-muted">' + all_fixtures[i][9] + '</div>' +
                    '</div>' +

                    '</div>' +

                    '</div>' +

                    '</div>';
                    

                $('#all_fixtures').append(output_all);
            }
        });


      
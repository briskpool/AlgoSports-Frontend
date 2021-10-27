

        var swiper = new Swiper(".mySwiper", {
            observer: true,
            observeParents: true,
            parallax: true,
            slidesPerView: 3,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }

        });



        const settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=39&season=2021&timezone=Europe/London&next=9",
            "method": "GET",
            "headers": {
                "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
                "x-rapidapi-host": "api-football-v1.p.rapidapi.com"
            }
        };

        $.ajax(settings).done(function(response) {
            console.log(response.response);
            data = response.response;
            const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            for (i = 0; i < data.length; i++) {
                league = data[i].league.name;
                date = data[i].fixture.date;
                formated_date = new Date(date);
                // console.log(months[formated_date.getMonth()]);
                minutes = '';
                if (formated_date.getMinutes() < 10) {
                    minutes = '0' + formated_date.getMinutes();
                } else {
                    minutes = formated_date.getMinutes();
                }
                 goals='';
                home_goal =data[i].goals.home;
                away_goal =data[i].goals.away;
                //  if(home_goal==null && away_goal==null){
                //     goals='VS';
                // }else{
                //     goals = home_goal+'-'+away_goal;
                // }
                match_date = months[formated_date.getMonth()] + ' ' + formated_date.getDate() + ', ' + formated_date.getHours() + ':' + minutes;
                venue = data[i].fixture.venue.name;
                home_team = data[i].teams.home.name;
                home_team_logo = data[i].teams.home.logo;
                away_team = data[i].teams.away.name;
                away_team_logo = data[i].teams.away.logo;
                // May 10, 11:00
                output =
                    '<div class="swiper-slide">' +
                    '<div class="col-xl-12 px-0">' +

                    '<div class="card shadow fadeIn wow animated delay-1 animated animated animated" style="visibility: visible; animation-name: fadeIn;">' +

                    '<div class="card-body py-4">' +

                    '<div class="items text-center">' +
                    '<div class="text-center">' +
                    '<div class="text-dark font-weight-bold">' + match_date + '</div>' +

                    '</div>' +
                    '<div class="d-flex justify-content-between">' +
                    '<div class="d-flex  align-items-center" title="Real Sociedad">' +
                    '<img src="' + home_team_logo + '" style="max-width: 60px" alt="Real Sociedad">' +
                    '<div class="pl-2">' +
                    // '<h5 class="font-weight-bold mb-0 text-muted">'+home_team.substring(0,4)+'</h5>'+
                    '</div>' +
                    '</div>' +
                    '<div class="d-flex align-items-center">' +
                    '<h4 class="text-dark mb-0"> VS </h4>' +
                    '</div>' +
                    '<div class="d-flex align-items-center" title="Liverpool">' +
                    '<div class="pr-2">' +
                    // '<h5 class="font-weight-bold mb-0 text-muted">'+away_team.substring(0,4)+'</h5>'+
                    '</div>' +
                    '<img src="' + away_team_logo + '" style="max-width: 60px" alt="Liverpool">' +
                    '</div>' +
                    '</div>' +
                    '<div class="text-center text-muted">' + league + '</div>' +
                    '</div>' +

                    '</div>' +

                    '</div>' +

                    '</div>' +
                    '</div>';

                swiper.appendSlide(output);

            }


        });

        
///////////////////////////////Standings//////////////////////////
const standing = {
    "async": true,
    "crossDomain": true,
    "url": "https://api-football-v1.p.rapidapi.com/v3/standings?season=2021&league=39",
    "method": "GET",
    "headers": {
        "x-rapidapi-key": "5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0",
        "x-rapidapi-host": "api-football-v1.p.rapidapi.com"
    }
};
$.ajax(standing).done(function(response) {
            // console.log(response.response[0].league.standings);
            data = response.response[0].league.standings[0];
            // console.log(data.length);
            // const months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
            for (i = 0; i < data.length; i++) {
                
                team_name = data[i].team.name;
                team_logo = data[i].team.logo;
                rank = data[i].rank;
                played = data[i].all.played;
                win = data[i].all.win;
                draw = data[i].all.draw;
                lose = data[i].all.lose;
                gs = data[i].all.goals.for;
                ga = data[i].all.goals.against;
                gd = data[i].goalsDiff;
                points = data[i].points;
               


                // if (home_goal==Null && away_goal == Null){
                //     console.log('VS');
                // }
                // May 10, 11:00
                // output_all='';  
                output_standings =
                   
                     '<tr>'+
                    '<td style="color: rgb(17, 17, 17);">'+rank+'</td>'+
                    '<td class="align-middle" style="color: rgb(17, 17, 17);">'+
                    '<img src="'+team_logo+'" alt="" width="50px" />'+
                    '</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+team_name+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+played+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+win+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+draw+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+lose+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+gs+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+ga+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+gd+'</td>'+
                    '<td style="color: rgb(17, 17, 17);">'+points+'</td>'+
                    
                '</tr>';
                    

                $('#standings').append(output_standings);

            }


        });
        
 
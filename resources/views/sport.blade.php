<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sport</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .show {
            visibility: visible !important;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>




        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/alp.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alpine Skiing</h5>
                            <p class="card-text">Skiing has an ancient history. The birth of modern downhill skiing is often dated to the 1850s, when Norwegian legend Sondre Norheim popularised skis with curved sides, bindings with stiff heel bands made of willow, as well as the Telemark and Christiania (slalom) turns.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">


                                    Skiing changed from a method of transportation into a sporting activity during the late 19th century. The first non-military skiing competitions are reported to have been held in the 1840s in northern and central Norway. The first national skiing competition in Norway, held in the capital Christiania (now Oslo) and won by Sondre Norheim, in 1868, is regarded as the beginning of a new era of skiing enthusiasm. A few decades later, the sport spread to the remainder of Europe and to the U.S., where miners held skiing competitions to entertain themselves during the winter. The first slalom competition was organised by Sir Arnold Lunn in 1922 in Mürren, Switzerland.

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/fen.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Fencing</h5>
                            <p class="card-text">Swordplay has been practised for thousands of years, as evidenced by carvings depicting fencers found in a temple near Luxor dating from around 1190 BC. From the 16th to the 18th century, duels were common, with combatants using a variety of weapons, including quarterstaffs and backswords. Such bouts were bloody and occasionally fatal.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                Fencing began the move from a form of military training to a sport in either the 14th or 15th century. Both Italy and Germany lay claim to its origins, with German fencing masters organising the first guilds in the 15th century, the most notable being the Marxbruder of Frankfurt, formed in 1478.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/gry.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rhythmic Gymnastics</h5>
                            <p class="card-text">Rhythmic gymnastics is a women-only event in which gymnasts perform on a floor with a rope, hoop, ball, clubs or ribbon accompanied by music, in individual or group events.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample3">
                                <div class="card card-body">
                                In the 1800s, rhythmic gymnastics operated under the guise of group gymnastics, and included a trace of elementary choreography. It grew slowly until the first experimental competitions appeared in eastern Europe in the 1930s, when its newfound complexity began to draw a wider audience.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/bdm.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Badminton</h5>
                            <p class="card-text">Badminton takes its name from Badminton House—home of the Duke of Beaufort in the English county of Gloucestershire. In 1873, the Duke is credited with bringing a version of the game—Poona—back from India and introducing it to his guests.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample4">
                                <div class="card card-body">
                                The sport quickly grew in popularity, and in 1877, the first set of written rules were devised by the newly formed Bath Badminton Club. The Badminton Federation of England was created 16 years later, and in 1899, it organised the first All England Championships.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/glf.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Golf</h5>
                            <p class="card-text">
                                A very simple sport, golf consists of "playing a ball with a club from the teeing ground into the hole by a stroke or successive strokes in accordance with the Rules." That’s the first rule in the Rules of Golf.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample5">
                                <div class="card card-body">
                                Golf is undoubtedly one of the oldest existing codified sports. Indeed, it was in the city of St. Andrews in Scotland that the first rules were established in 1754. But some research shows that a similar sport was practised beforehand under the name “colf” or “kolven” in the Netherlands, and arrived on the British Isles in the 15th century.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/sal.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sailing</h5>
                            <p class="card-text">
                             Sailing is the art of moving a boat by harnessing the power of wind. Mastery over ever-changing conditions requires both great skill and experience.
                            </p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample6">
                                <div class="card card-body">
                                International yacht racing began in 1851, when a syndicate of members of the New York Yacht Club built a 101-foot schooner named "America". The yacht was sailed to England, where it won a trophy called the Hundred Guineas Cup in a race around the Isle of Wight. The trophy was renamed "The America's Cup" and remained in the hands of the United States until 1983, when an Australian yacht finally brought to an end the New York Yacht Club’s 132-year winning streak.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/csp.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Canoe Flatwater</h5>
                            <p class="card-text">Canoe sprint has two different types of craft: the kayak and the canoe. The kayak probably originates from Greenland, where it was used by the Eskimos primarily for hunting, fishing and transportation. The canoe was used all over the world as a method of transportation, trade and war. The first official sporting events utilising both of these crafts</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample7">
                                <div class="card card-body">
                                The word "kayak", means “man-boat” in Eskimo. Found predominately in North America, Siberia and Greenland, kayaks were ideal for individual transport and were used primarily for hunting and fishing. The canoe, on the other hand, was used on a wider scale. From Native American tribes to the Polynesians, the canoe had a variety uses, 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/jud.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Judo</h5>
                            <p class="card-text">Judo is derived from jujitsu, the hand-to-hand combat technique of ancient samurai warriors. It involves throwing opponents to the floor and holding them in submission.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample8">
                                <div class="card card-body">
                                    Judo is a traditional Japanese wrestling sport developed in the 1880s. It was Dr Jigoro Kano (1860-1938) who combined the features of the various schools of the sport and codified the rules. Kano stressed the philosophical principles of judo, adding methods of physical, intellectual and moral education, eliminating many of the dangerous parts of jujitsu, and opening his first school, or dojo, in 1882.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="col">
                    <!-- Card  -->
                    <div class="card" style="width: 18rem;">
                        <img src="https://olympics.com/images/static/sports/pictograms/v2/kte.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Karate</h5>
                            <p class="card-text">Karate is an ancient discipline with the roots of its current form originating on the Japanese island of Okinawa during the Ryukyu Dynasty, which was established in the 15th century.</p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    More info
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample9">
                                <div class="card card-body">
                                A karate practitioner is called a karateka. Karate comprises two modalities: Kumite and Kata. In Kumite, or combat, the winner of the three-minute fights is the one who obtains a clear lead of eight points, or the competitor having the highest number of points at time-up. If 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>



    </x-app-layout>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
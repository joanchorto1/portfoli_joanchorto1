<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <title>Portafoli Joan Chorto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<nav>
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="/" class="w3-bar-item w3-button"><b>JCT</b> Joan Chortó</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="/project" class="w3-bar-item w3-button">Projects</a>
                <a href="/experience" class="w3-bar-item w3-button">Experience</a>
                <a href="/contact" class="w3-bar-item w3-button">Contact</a>
            </div>
        </div>
    </div>
</nav>


<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    {{--    <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">--}}
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span
                class="w3-hide-small w3-text-light-grey">Architects</span></h1>
    </div>
</header>

<div class="w3-content w3-padding" style="max-width:1564px">
    <section>
        {{$slot}}
    </section>
</div>


<footer class="w3-center w3-black w3-padding-16">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank"
                     class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Im bored</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container-fluid-mt-3">
            <h1>GOT7</h1>
            <p>✨ "All About GOT7 – Let's Dive In!"</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-overlay card-group">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-overlay card-name">
                <p class="default-text">Jaebeom</p>
                </div>
            </div>
            <div class="col">
                <div class="card-overlay card-age">
                <p class="default-text">Jinyoung</p>
                </div>
            </div>
            <div class="col">
                <div class="card-overlay card-location">
                <p class="default-text">Mark</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-overlay card-name1">
                <p class="default-text">Youngjae</p>
                </div>
            </div>
            <div class="col">
                <div class="card-overlay card-age1">
                <p class="default-text">Jackson</p>
                </div>
            </div>
            <div class="col">
                <div class="card-overlay card-location1">
                <p class="default-text">Bambam</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card-overlay card-location2">
                <p class="default-text">Yugyeom</p>
                </div>
            </div>
        </div>
        <div class="jb" id="jb">
            <div class="row-description d-flex align-items-center">
                <div class="col-4">
                    <div class="card-overlay">
                    </div>
                </div>
                <div class="desc ms-3">
                    <h1>Backbone of GOT7</h1>
                    <p>The definition of "I didn’t choose leadership, leadership chose me." JB, the leader who somehow manages to stay calm, composed, and borderline cold-hearted on the outside, yet his soft and caring side secretly shines through at the most unexpected moments, like when he’s quietly supporting his members or delivering a heartfelt message to fans. He’s the kind of leader who gives off an aura of someone who’s too cool to be bothered but, deep down, you know he’s the one holding everything together, making sure GOT7’s dynamic remains strong. Whether he’s commanding the stage with his mesmerizing vocals or making subtle dad jokes, JB’s unassuming yet commanding presence reminds us why he’s the heart and soul of the group. But don’t forget, he’s secretly a cat person who loves us more than he lets on, and that’s part of his charm!</p>
                </div>
            </div>
        </div>  
        <div class="jinyoung" id="jinyoung">
            <div class="row-description d-flex align-items-center">
                <div class="col-4">
                    <div class="card-overlay">
                    </div>
                </div>
                <div class="desc ms-3">
                    <h1>The Elegantly Savage King of Wit, the Heartfelt Intellectual</h1>
                    <p>Jinyoung, who is so effortlessly elegant and sophisticated that he could grace the cover of Vogue and still make you feel like you’re having tea with the smartest person at the table. He’s the member who roasts you with the grace of a poet, all while giving you a look that could kill, but he’ll follow it up with a heartfelt piece of advice that makes you feel like he just solved all of your life problems. With his deep, soulful voice and uncanny ability to blend sarcasm with wisdom, Jinyoung is the paradox we never knew we needed—he’ll serve you intellectual knowledge and savage burns in the same breath. Whether he's giving us “that look” or pouring his heart out in a song, Jinyoung has mastered the art of being both untouchably regal and completely relatable at the same time. He’s the calm before the storm and the storm itself, wrapped in a pretty package of intellectual charm.</p>
                </div>
            </div>
        </div>
        <div class="mark" id="mark">
            <div class="row-description d-flex align-items-center">
                <div class="col-4">
                    <div class="card-overlay">
                    </div>
                </div>
                <div class="desc ms-3">
                    <h1>The Silent Rebel with a Heart of Gold, Our King of Quiet Moments</h1>
                    <p>Mark is the type of guy who can sit in a room and not say much, but when he opens his mouth, it’s either a deep, philosophical statement that makes us question life or something completely hilarious that leaves everyone in stitches. He may not be the loudest in the room, but his actions speak louder than words ever could. With his relaxed and chill demeanor, he comes off as the coolest of the cool, the guy who has everything together and lives life effortlessly. But behind the calm is a man who’s deeply caring, fiercely loyal, and whose love for Ahgases and his members runs deeper than the oceans. His soft, raspy voice alone is enough to send anyone into a trance, and even though he likes to keep things low-key, his kindness shines brighter than all the spotlight he deserves.</p>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector(".card-overlay.card-name").addEventListener("click", function () {
                    document.getElementById("jb").scrollIntoView({ behavior: "smooth" });
                });

                document.querySelector(".card-overlay.card-age").addEventListener("click", function () {
                    document.getElementById("jinyoung").scrollIntoView({ behavior: "smooth" });
                });

                document.querySelector(".card-overlay.card-location").addEventListener("click", function () {
                    document.getElementById("mark").scrollIntoView({ behavior: "smooth" });
                });
            });
        </script>
</body>
</html>




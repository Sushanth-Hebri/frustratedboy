<!DOCTYPE html>
<html>
<head>
    <style>
        .dropdown-content {
            display: none;
            padding: 5px;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }
        .liked {
            display: flex;
            position: relative;
            width: 600px;
            height: 90px;
            border: 1px solid white;
            background-color: rgba(10, 10, 10, 0.726);
            margin-bottom: 70px;
            box-shadow: 3px 3px 2px 2px rgba(66, 64, 68, 0.795);
        }

        .sidehead {
            color: white;
            margin-left: 10px;
        }

        .lik {
            background-color: white;
            width: 90%;
        }

        .likedpng {
            object-fit: cover;
            height: 90px;
            width: 90px;
            background-color: rgb(210, 92, 149);
        }

        .likedpng img {
            width: 100%;
            height: 100%;
        }

        .likednameandcount {
            display: flex;
            width: 510px;
            text-align: center;
            flex-direction: column;

        }

        .playlistname {
            background-color: rgb(22, 22, 21);
            height: 60px;
            color: white;
            font-size: 28px;
            width: 510px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }


        .extra {
            margin-left: 40px;
        }

        .more {
            background-color: transparent;

        }

        .count {
            background-color: rgb(18, 109, 179);
            height: 30px;
            color: rgb(192, 192, 192);
        }

    </style>
</head>
<body>
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            .dropdown-content {
                display: none;
                padding: 5px;
                background-color: #f9f9f9;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            }
        </style>
    </head>
    <body>
        <!-- Loop through the divs -->
    <?php for ($i = 1; $i <= 7; $i++) { ?>
        <div class="liked">
            <div class="likedpng"><img src="like.png" alt="like"></div>
            <div class="likednameandcount">
                <div class="playlistname">
                    <div class="extra">
                        <p>liked songs</p>
                    </div>
                    <button class="option" onclick="toggleDropdown('dropdown<?php echo $i; ?>')">more_vert</button>
                </div>
                <div class="count">53 songs</div>
            </div>
            <div id="dropdown<?php echo $i; ?>" class="dropdown-content">
                <!-- Dropdown content for the respective "liked" div -->
                <!-- Example items -->
                <div class="dropin">
                    <a href="#">Item 1</a>
                    <a href="#">Item 2</a>
                    <a href="#">Item 3</a>
                </div>
            </div>
        </div>
       
    <?php } ?>
    
    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.style.display = (dropdown.style.display === 'none') ? 'block' : 'none';
        }
    </script>
    </body>
    </html>
    
    

   
</body>
</html>

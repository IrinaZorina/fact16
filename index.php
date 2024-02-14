<?php 

$time = date('H:i');
$data;
$imgLight = "assets/image/day.jpeg";
$imgDark = "assets/image/night.jpg";
     
if ($time > 8.00 && $time<20.00){
    $data = $imgLight;

}  else  {
    $data = $imgDark;
}


?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body style = "background-image:url('<?php echo $data ?>'); opacity: 1;";>


    
    
<?php include "assets/html/header.html";?>


   
        <div class="fio">

             <h1 class = "initials"> Крылов Леонид Сергеевич </h1>

        </div>

        
        <div class="profile">


            <div class="photo">
        
                <img src="assets/image/PHOTO.jpg" class = "profile-photo" alt="Фотография" width="350" height="300" class = "myPhoto">

            </div>   
                         
            <div class= "info">
    
                <p><b>Привет</b>, <br>последнее десятилетее работаю юристом в различных страховых компаниях.</p> 
                <p>Дошел до руководителя направления, где обучал и курировал сотрудников.</p>
                <p>В настоящий момент есть потребность поменять сферу деятельности.</p>
                <p> Люблю ходить в походы, а также бродить по городам и селам </p>
    
            </div>
    
            <div class="courses">
                <p>Приятная  атмосфера на курсе.</p>
                <p>Хороший преподаватель.</p>  
    
            </div>  
    
      
        </div>

        <section class = "myTravels">

            <div class = "journey journey-khanty">

                <figure>
                <img src="assets/image/города/ханты.jpg" alt="фотография Ханты-Манскийск" width="250" height="150" class = "photo2">

                <figcaption>Ханты-Мансийск</figcaption>            
                 </figure>

            </div>
           
            <div class = "journey journey-kirov">
            
                <figure>

                    <img src="assets/image/города/Киров.jpg"  alt="Фотография Киров"  width="250" height="150" class = "photo2">
                
                    <figcaption>Киров</figcaption>
    
                </figure>
           
            </div>

            <div class = "journey journey-barnaul">

            <figure>
                <img src="assets/image/города/Барнаул.jpg"  alt="Фотография Барнаул" width="250" height="150" class = "photo2">
            
                <figcaption>Барнаул</figcaption>

            </figure>

            </div>

            <div class = "journey journey-ekat">

                <figure>
                <img src="assets/image/города/Екат.jpg" alt="Фотография Екатеринбург"  width="250" height="150" class = "photo2">

                <figcaption> Екатеринбург</figcaption>

                     </figure>
          
            </div>

        

        </section>


   
        <section class = "myTravels myTravels-flex ">

            <div class="container"> 

                <div class = "journey journey-khanty">

                    <figure class = "figer">
                    <img src="assets/image/города/ханты.jpg" alt="фотография Ханты-Манскийск" width="250" height="150" class = "photo2">

                        <figcaption>Ханты-Мансийск</figcaption>
            
                </figure>

                </div>
           
                <div class = "journey journey-kirov">
            
                     <figure class = "figer">
                    <img src="assets/image/города/Киров.jpg"  alt="Фотография Киров"  width="250" height="150" class = "photo2">
                
                    <figcaption>Киров</figcaption>
    
                     </figure>
         
                </div>
        
            </div> 

             <div class="container"> 

                    <div class = "journey journey-barnaul">

                        <figure class = "figer">
                        <img src="assets/image/города/Барнаул.jpg"  alt="Фотография Барнаул" width="250" height="150" class = "photo2">
            
                        <figcaption>Барнаул</figcaption>

                         </figure>

                     </div>

                 

                    <div class = "journey journey-ekat">

                    <figure class = "figer">
                    <img src="assets/image/города/Екат.jpg" alt="Фотография Екатеринбург"  width="250" height="150" class = "photo2">

                    <figcaption> Екатеринбург</figcaption>

                     </figure>
          
                     </div>

             </div>   

        

      </section>
    


    <div class = "vodorod">
        <h1 class = "element">H</h1>
        <p class =  "thin">1 <br>1,00797</p>
        <p class = "thin">Hydrogenium</p>
        <p class =  "thin"></p>
        <p class= "bold">Водород</p>
    </div>


    <?php include "assets/html/footer.html";?>


</body>
</html>
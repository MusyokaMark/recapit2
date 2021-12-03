

<main>
<link rel="stylesheet" href="style.css">
<body onload = "slider()">
    <div class="banner">
        <div class="slider">
            <img src="images/comp1.jpg" id="slideImg">
        </div>
       
        <div class="over-lay"> 
        <?Php
require "header.php";
?>
            <div class="content">
 
                <h1>RECAPIT COMPUTER SERVICES</h1>
                <h3>Scroll down to see our services</h3>
                <div>
                    <button type="button">SCROLL DOWN</button>
                </div>
            </div> 

        </div>
    </div>
    <script>
    var slideImg = document.getElementById("slideImg");
    var images = new Array(
        "images/comp1.jpg",
        "images/comp2.jpg",
        "images/comp3.jpg",
        "images/comp7.jpg"
    );
    var len = images.length;
    var i = 0;
    function slider() {
        if (i > len - 1) {
           i = 0; 
        }
        slideImg.src = images[i];
        i++;
        setTimeout('slider()',4000);
    }
</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-24b66307-d25a-47d6-a74b-16b48d7aab38"></div>
<main>
    <h2>About Us</h2>
    <p>Hello kenya. PORT MANAGEMENT ASSIGNMENT
A dry port provides services for handling and temporary storage of containers, general and/or bulky cargoes that enters or leaves the dry port by any mode of transport such as road, railway, inland waterways or airports. It is also known as inland port.it is an inland intermodal terminal directly connected by road or rail to a seaport operating as a center for transship of see cargo to inland destination.
In order to bring port services closer to customers and reduce port congestion, KPA has constructed deports(ICD)at Nairobi, Naivasha, Kisumu and Eldoret. This depots  are linked to Mombasa port container terminals by a rail connection and services.
DRY PORTS IN KENYA
There are several ports in Kenya. They include;
1.	Naivasha dry port 
2.	Eldoret inland port
3.	Inland container depot in Embakasi
4.	Inland container deport in Kisumu

NAIVASHA DRY PORT
It improves the movement of imports and exports moving the time-consuming sorting and processing of containers inland, away from congestion seaports.
It was set up to speed up the flow of cargo between ships and major land transportation networks, creating a more central distribution point.
This port is the fourth to be established in Kenya, there is Eldoret which is linked by rail to port Mombasa and the inland container depot in Kisumu which links lake Victoria  with  Mombasa port by rail.
This will relieve the Mombasa port of congestion, create more space for handling more cargo, and improves efficiency, which would attract more trade, including transshipment business at the Mombasa port. 
The Naivasha facility will provide storage of cargo especially those destined for Uganda, South Sudan, Northern Tanzania, Rwanda, Burundi and Democratic Republic of Congo. 
The deports located in Nairobi, Kisumu, and Eldorect have transit sheds and stacking grounds equipped with various types of cargo handling equipment like forklift trucks, front loaders, tractors, trailers, reach stackers and cranes.
They were established to realize maximum benefits of containerization of cargo, which is the current trend, and to avoid over-investment in the port facilities and storage capacity.
The ICDs were established for the following strategic objectives;
•	To provide safety and security to transit cargo
Cargo transported by rail is safer therefore ensuring the safe transportation of cargo to and from port of Mombasa.
•	Bring port services closer to hinterland customers
Customers based in hinterland can have access to the same services offered at the port of Mombasa without having to travel all the way for the same thus saving time and money. The ICDs are therefore an efficient shipping solution.
•	Decongesting the port of Mombasa
The ICDs help decongest the container terminal at the port by reducing container dwell time through enhanced take-off of import containerized cargo for clearance at the ICD.
•	Saving customer costs 
Customers reduce the amount of time and money that would have otherwise been spent travelling all the way to the port of Mombasa to clear or forward cargo.
•	Minimize road damage and carnage
 The ICDs facilitates the diversion of heavy container traffic from the road to the trail. This in turn minimizes road damage caused by heavy trucking thus ensuring smoother roads while giving them more life.
Kenya Ports Authority has roles which include the following;
</p>
</main>
</body>
</main>
<?php
require "locationmap.php";
require "footer.php";
?>

@extends("layouts.app")
@section("content")
<link href="/css/about.css" rel="stylesheet"/>
     <div class="about-section" style="margin:5rem">
  <h1>About Us</h1>
  <p>Plutus - A wallet for all</p>
  <p>We are a team of Three Working to make a centralized system of save and secure money transfer where people can send money to each other. We are not just creating a platofrom, with this project our aim is to solve problems of safe money transfer all over the world. We aim to make the project world wide and accesseble to everyone around the world.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row" style="margin: 5rem">
  <div class="column">
    <div class="card">
      <img src="https://avatars.githubusercontent.com/u/65907464?v=4" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Apurba Adhikari</h2>
        <p class="title">Fullstack Developer</p>
        <p>Full stack web developer, machine learning developer and low level computing enthusiast.</p>
        <p>contact@apurbaadhikari.com.np</p>
        <a href="https://www.linkedin.com/in/apurba-adhikari-3539461aa/"><p><button class="button">Contact</button></p></a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media-exp1.licdn.com/dms/image/C5603AQGN6aBjApMTFQ/profile-displayphoto-shrink_200_200/0/1614150617549?e=1639612800&v=beta&t=WdJSvvJ04JhCBAPh-DhswR1d8TYabvKQVjrFXmJkc-8" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
@endsection

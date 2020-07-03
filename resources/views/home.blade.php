@extends('layouts.app')

@section('title', 'Digital Nomads')

@section('content')
<div class="header">
    <div class="container">
        <div class="row">
        <img src="img/highpointlogo.png" alt="HighPoint Interactive" />
        </div>
    </div>
</div>
<div class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>STANDING AT THE HIGHPOINT OF <span>DIGITAL STRATEGY</span></h1>
            </div>
        </div>
    </div>
</div><!--/hero-->
<div class="services d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 panel-content">
                <h2>Our <span>Digital Services</span></h2>
                <p class="blurb">If there’s a need then we are your solution!</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <!--<div class="cardfront">
                        <i class="fas fa-bullseye"></i>
                        <h3>Strategy</h3>
                    </div>-->
                    <div class="cardback">
                         <div class="card-intro">
                         <i class="fas fa-bullseye"></i>
                            <p class="card-title">Strategy</p>
                            
                        </div>
                        
                        <p>We can plan out every single part of your web based strategy for marketing, public relations and more! There’s nothing more important than setting up the game plan you need to excel and succeed!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
            <div class="card">
                    <!--<div class="cardfront">
                        <i class="fas fa-search"></i>
                        <h3>SEO</h3>
                    </div>-->
                    <div class="cardback">
                        <div class="card-intro">
                            <i class="fas fa-search"></i>
                            <p class="card-title">SEO</p>
                            
                        </div>
                       
                        <p>From keywords to an optimized site flow and everything in between, High Point Interactive will get deep under your hood and reinvent the way you use search engine marketing!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <!--<div class="cardfront">
                        <i class="fas fa-pencil-ruler"></i>
                        <h3>Web Design</h3>
                    </div>-->
                    <div class="cardback">
                        <div class="card-intro">
                            <i class="fas fa-pencil-ruler"></i>
                            <p class="card-title">Web Design</p>
                           
                        </div>
                        <p>Your site’s appeal and design is the backbone of your marketing strategy that always needs to be able to reach as wide an audience as possible! With our help you can start hosting pages that can draw attention and keep it!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card">
                    <!--<div class="cardfront">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Consultation</h3>
                    </div>-->
                    
                    <div class="cardback">
                        <div class="card-intro">
                            <i class="fas fa-lightbulb"></i>
                            <p class="card-title">Consultation</p>
                           
                        </div>
                        <p>Have a question? Need a coach? We can take you step by step through the management and expansion of your web based strategies to help you make the right choices that work for you!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/about-us.png" />
            </div>
            <div class="col-md-6">
                <div class="col-wrapper">
                    <h3>About HighPoint</h3>
                    <p>HighPoint Interactive was founded with the singular desire of helping small businesses take off in the incredibly competitive market of today. Backed up by a wealth of experience in every aspect of web design and solutions you can think of; we are the number one choice for anyone ready to take the leap and chase their goals! High Point Interactive offers you:</p>
                    <ul class="list">
                        <li>Reliable and reputable digital solutions!</li>
                        <li>An extremely talented design team!</li>
                        <li>Comprehensive and transparent support!</li>
                        <li>Competitive pricing!</li>
                    </ul>
                </div><!--/wrapper-->
            </div>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h3>Ready to get started?</h1>
                <p>Then fill in our simple contact form so we can answer all your burning questions and set up a profitable business arrangement! Available 24/7 and always looking forward to hearing from you!</p>
                <form method="POST" action="/">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="form-field col-md-12">
                            <label for="name" class="fixed">Name<span class="required">*</span></label>
                            <input type="text" name="name" />  
                        </div>
                        <div class="form-field col-md-6">
                            <label for="email" class="fixed">Email<span class="required">*</span></label>
                            <input type="text" name="email" />  
                        </div>  
                        <div class="form-field col-md-6">
                            <label for="phone" class="fixed">Phone<span class="required">*</span></label>
                            <input type="text" name="phone" />  
                        </div> 
                        <div class="form-field col-md-12">
                            <label for="message">Message<span class="required">*</span></label>
                            <textarea name="message"></textarea> 
                        </div> 
                        <div class="form-field col-md-12">
                            
                           <button type="submit">Send Us A Message</button>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
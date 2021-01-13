<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Article</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/favicon.svg')}}">
    <!-- UltraNews CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/widgets.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">


    

@if(\LaravelLocalization::getCurrentLocaleDirection() == 'rtl')

<style>

#header{
    direction: ltr;
    text-align: right;
}
   #nav-main{
    float:right;
    direction:rtl!important;
    font-size:18px;
    margin-left:100px;
    }
    
    .main-title3{
		direction:rtl!important;
        text-align:right!important;
    }
	#main{
        direction:ltr!important;
        text-align:ltr!important;
    }

    .module-logo-horizontal{
        margin-left:-100px;
    }

    #section-article{
        direction:ltr!important;
        text-align:right!important;
    }

    #latest{
     direction:rtl!important;
     text-align:right!important;   
    }
    #category{
     direction:ltr!important;
     text-align:right!important;
     margin-left: 50px;;     
    }
    #tag{
     direction:ltr!important;
     text-align:right!important;
     margin-left: 20px;;     
    }
    #search{
     direction:ltr!important;
     text-align:left!important;   
    }
    #articles{
     direction:ltr!important;
     text-align:right!important; 
     margin-right: 20px;;  
    }
    #section-speakers{
     direction:ltr!important;
     text-align:right!important;   
    }
	
    #tb{
     direction:rtl!important;
     text-align:right!important;   
    }
	#section-event-infos{
     direction:rtl!important;
     text-align:right!important;   
    }
    #video{
     direction:rtl!important;
     text-align:right!important;   
    }
    #footer{
     direction:rtl!important;
     text-align:right!important;  
    }
    #footer_text{
        font-size:16px!important;
    }
    #cookies{
     direction:rtl!important;
     text-align:right!important;   
    }
    #cookies{
     direction:rtl!important;
     text-align:right!important;   
    }
    #title{
     direction:rtl!important;
     text-align:right!important;   
    }

    
}
</style>

@endif
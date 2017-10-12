<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <!-- page loader -->
    @include('includes.header')
    <!-- /page loader -->	
	
    <!-- Navigation -->
    @include('includes.nav')
    <!-- /Navigation -->  
    
    @yield('content')

    <!--FOOTER-->
    
    @include('includes.footer')   
    @yield('customjs')
</body>

</html>

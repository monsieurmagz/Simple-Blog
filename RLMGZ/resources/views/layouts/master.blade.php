     <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <!--Head-->
    @include('layouts.head')
    <body>
       
        
    <!--Navbar-->    
    @include('layouts.nav')
    <!--/Navbar-->

    <!--Main-->
    @yield('content')   
    <!--/Main-->
        
    <!--Footer-->
    @include('layouts.footer')
    <!--/.Footer-->

        
    <!-- JQuery -->
    @include('layouts.jquery')
    <!--/.Jquery-->

    </body>
</html>
		
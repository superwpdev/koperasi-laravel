<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin/layout.title-meta')
    @include('admin/layout.header')
</head>
<body>

<table class="table" width="100%" height="100%">
    <tr>
        <td width="25%" colspan="2"> <h1> Koperasi</h1></td>
       
    </tr>
    <tr>
        <td>  @include('admin/layout.sidebar')</td>
        <td>
            
   <!-- KONTEN -->
    <main class="wrapper">
    @yield('konten')
    </main></td>
    </tr>
    <tr >
        
        <td colspan="2"> @include('admin/layout.footer')</td>
    </tr>
</table>


  
   
  
@yield('script')
</body>
</html>





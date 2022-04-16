<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
  @include("admin.admincss")
  </head>
  <body>
  <h2>Admin Panel</h2>
    <div class="container-scroller"> 
    @include("admin.navbar")
   
</div>
    @include("admin.adminscript")
    
  </body>
</html>
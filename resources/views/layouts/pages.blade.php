<!DOCTYPE html>
<html>

<head>
@include("include.head")
</head>

<body  class="sub_page">
<div class="hero_area">
 <!-- header section strats -->
 @include("include.header")
    <!-- end header section -->
</div>

@yield("content")

@include("include.info")
   <!-- footer section -->
@include("include.footer")
<!-- footer section -->
@include("include.footerjs")
</body>

</html>
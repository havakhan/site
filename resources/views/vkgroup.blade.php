@extends('glagne')

@section('content')
<div id="vkgroup">
     <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

    <!-- VK Widget -->
    <div id="vk_groups"></div>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 2, wide: 1, width: "700", height: "550", color3:"FF0000"}, 108081853);
    </script>
</div>
@endsection
@extends('layout.empty')




      <div class="lobby-container">
        <img id="Image-Maps-Com-image-maps-2020-12-01-164317" src="img/lobby/ESPACIO-3D-SENNOVA-V2.png" border="0" width="100%" height="100%" orgWidth="100%" orgHeight="100%" usemap="#image-maps-2020-12-01-164317" alt="" />
        <map name="image-maps-2020-12-01-164317" id="ImageMapsCom-image-maps-2020-12-01-164317">
        <area  alt="" title="" href="{{route('micrositio', ['id'=>'1'])}}" shape="rect" coords="331,718,535,936" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'2'])}}" shape="rect" coords="534,717,745,933" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'3'])}}" shape="rect" coords="496,543,686,711" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'6'])}}" shape="rect" coords="689,543,867,718" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'5'])}}" shape="rect" coords="960,674,1201,932" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'4'])}}" shape="rect" coords="1202,678,1426,932" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'7'])}}" shape="rect" coords="1538,545,1727,718" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'8'])}}" shape="rect" coords="1730,543,1919,716" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'9'])}}" shape="rect" coords="1638,715,1855,932" style="outline:none;" target="_self"     />
        <area  alt="" title="" href="{{route('micrositio',['id'=>'10'])}}" shape="rect" coords="1853,714,2070,931" style="outline:none;" target="_self"     />
        <area shape="rect" coords="2390,1340,2392,1342" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
        </map>
        <div class="image-lobby-container">

        </div>



        <!--
        <div>
          <ul>
            @foreach( $datos['info'] as $d)
            <li><a href = "{{ route('micrositio',['id'=>$d->id]) }}"></a></li>
            @endforeach

          </ul>

        </div>
      -->
      </div>

      <script src="imageMap/js/imageMapResizer.min.js"></script>
      <script>
          //document.getElementById('Image-Maps-Com-image-maps-2020-12-01-164317').imageMapResize();
        imageMapResize();
      </script>

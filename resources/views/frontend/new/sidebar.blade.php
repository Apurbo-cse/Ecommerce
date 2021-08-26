<div class="col-12 col-lg-3 p-0">
    <div class="col-9 col-lg-3 p-0 side_mega_menu">
        <div class="cd-dropdown-wrapper">
            <a class="cd-dropdown-trigger" href="#0">All Category</a>
            <nav class="cd-dropdown">
                <h2>Our Item Categories</h2>
                <a href="#0" class="cd-close">Close</a>
                <ul class="cd-dropdown-content">

                    @php $data = App\Models\Category::where('group_id','=','0')->get(); @endphp

                    @foreach($data as $item)

                    @php $count = App\Models\Category::where('group_id','=',$item->id)->count(); @endphp
                    @if($count > 0)
                    <li class="has-children parent">
                        <a href="{{ url('category/'.$item->slug) }}"><img class="img-fuild" src="" width="15px">{{ $item->name }}</a>


                        <ul class="cd-secondary-dropdown is-hidden child">

                            <li class="go-back"><a href="#0">Menu</a></li>

                            @php $data = App\Models\Category::where('group_id','=',$item->id)->get(); @endphp

                            @foreach($data as $item)

                            <li class="">
                                <a href="{{ url('subcategory/'.$item->slug) }}">{{ $item->name }}</a>
                            </li>

                            @endforeach

                        </ul>


                    </li>
                    @else
                    <li class="parent py-1 ml-3">
                        <a href="{{ url('category/'.$item->slug) }}">{{ $item->name }}</a>

                     </li>

                    @endif

                    @endforeach

                </ul> <!-- .cd-dropdown-content -->

            </nav> <!-- .cd-dropdown -->
        </div> <!-- .cd-dropdown-wrapper -->
    </div>

</div>

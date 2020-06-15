 @extends('layout')
 @section('container')


@foreach($questions as $post)
 <a class="row border rounded align-items-center justify-content-between py-4 px-3 link-dark link-hover-dark bg-hover-light mx-sm-0 mb-2" href="{{url('detail/'.$post->id)}}">
          <div class="col-sm">
            {{$post ->header}}
          </div>

          <div class="col-sm-3 small text-lh-1">
            <div class="media align-items-center">
              <!-- <div class="rounded-circle mr-2">
                <img class="img-fluid rounded-circle" src="{{asset('docs-ui-kit/assets/img-temp/100x100/img1.jpg')}}" alt="Image Description" width="33">
              </div> -->

              <div class="h6 media-body">{{$post->description}}</div>
            </div>
          </div>

          <div class="col-sm-2 text-sm-right text-muted small">
            {{date('d F Y', strtotime($post->created_at))}}
          </div>
        </a>
@endforeach

      
@endsection

@section('category')
@foreach($categories as $category)
          <div class="col-md-6 mb-5">
            <div class="media h-100 shadow rounded p-4">
              <i class="far fa-fw fa-dot-circle fa-3x text-warning mr-4 mt-1">
              </i>

              <div class="media-body">
                <h5 class="mb-1"><a class="link-dark" href="{{url('kategori/'.$category->id)}}">{{$category->description}}</a></h5>
                <p class="mb-0">{{$category->detail}}</p>
              </div>
            </div>
          </div>

@endforeach

@endsection

@section('category2')
@foreach($nama as $nama)
    <a class="text-white mr-1" href="{{url('kategori/'.$nama->id)}}">{{$nama->description}}</a>
@endforeach

@endsection
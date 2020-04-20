<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Moun-ten10</title>
  <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
  <header>
    <nav class="my-navbar">
      <a class="my-navbar-brand" href="/"><img src="{{('/images/Moun-ten10logo.png')}}" alt="title" width="260" height="70"></a>
    </nav>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </header>
<main>
  <div class="container">
      <!-- {{ csrf_field() }} -->
    <div class="row">
        <div class="col col-md-4">
        <nav class="panel pnel-default">
          <div class="dropdown">
            <!-- <h5>海外の安いパーツを探す！</h5> -->
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              パーツ名を選択
             </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @foreach($categories as $category)
                <a href="{{ route('results.result',['id' => $category->id]) }}" class="dropdown-item">{{ $category->part_name}}</a>
              @endforeach
            </div>
            <form class="form-horizontal" action="{{ route('results.result', ['id' => $current_category_id]) }}" method="get">
              <div class="partspec">
                <!-- パーツ詳細表示 -->
                  <u><h6>検索結果をさらにしぼる！</h6></u>
                    @foreach($spec as $sp)
                      <div class="specdetail">□ {{ $sp->spec}}
                          <div>
                                <label><input type="radio" name="spec_id{{ $sp->id}}" value="{{ $sp->spec_detail1 }}" checked> {{ $sp->spec_detail1 }}</label>
                                <label><input type="radio" name="spec_id{{ $sp->id}}" value="{{ $sp->spec_detail2 }}" > {{ $sp->spec_detail2 }}</label>
                                <label><input type="radio" name="spec_id{{ $sp->id}}" value="{{ $sp->spec_detail3 }}" > {{ $sp->spec_detail3 }}</label>
                          </div>
                      </div>
                    @endforeach
                </div>
                <button name="add" type="submit" class="btn btn-secondary">送信</button>
              </form>
            </nav>
          </div>
            <div class="column col-md-8">
                <div class="panel_search">
                    <!-- <div class="panel-heading"><h6>results</h6></div> -->

                    @if ($current_category_id === 1)
                                                <div class="paginate">
                                                  {{ $current_part_name->part_name}}　検索結果　:　{{ $handlebar_results->total() }}　件
                                                  {{ $handlebar_results->links() }}
                                                </div>
                                                  <div class="wrap">
                                                      @foreach($handlebar_results as $product)
                                                        <div class="box">
                                                            <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                            <img alt="a" title="a" src="{{$product->image_url}}">
                                                            <p class="box_p">{{$product->name}}</p>
                                                            <p class="box_p">Price：{{$product->price}}</p>
                                                            </a>
                                                        </div>
                                                      @endforeach
                                                  </div>
                                                <div class="paginate">
                                                  {{ $handlebar_results->links() }}
                                                </div>

                                                  @elseif ($current_category_id === 2)
                                                    <div class="paginate">
                                                      {{ $current_part_name->part_name}}　検索結果　:　{{ $grip_results->total() }}　件
                                                      {{ $grip_results->links() }}
                                                    </div>
                                                      <div class="wrap">
                                                          @foreach($grip_results as $product)
                                                            <div class="box">
                                                                <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                <img alt="a" title="a" src="{{$product->image_url}}">
                                                                <p class="box_p">{{$product->name}}</p>
                                                                <p class="box_p">Price：{{$product->price}}</p>
                                                                </a>
                                                            </div>
                                                          @endforeach
                                                        </div>
                                                      <div class="paginate">
                                                        {{ $grip_results->links() }}
                                                      </div>

                                                      @elseif ($current_category_id === 3)
                                                        <div class="paginate">
                                                          {{ $current_part_name->part_name}}　検索結果　:　{{ $stem_results->total() }}　件
                                                          {{ $stem_results->links() }}
                                                        </div>
                                                          <div class="wrap">
                                                              @foreach($stem_results as $product)
                                                                <div class="box">
                                                                    <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                    <img alt="a" title="a" src="{{$product->image_url}}">
                                                                    <p class="box_p">{{$product->name}}</p>
                                                                    <p class="box_p">Price：{{$product->price}}</p>
                                                                    </a>
                                                                </div>
                                                              @endforeach
                                                            </div>
                                                          <div class="paginate">
                                                            {{ $stem_results->links() }}
                                                          </div>

                                                          @elseif ($current_category_id === 4)
                                                            <div class="paginate">
                                                              {{ $current_part_name->part_name}}　検索結果　:　{{ $sadlle_results->total() }}　件
                                                              {{ $sadlle_results->links() }}
                                                            </div>
                                                              <div class="wrap">
                                                                  @foreach($sadlle_results as $product)
                                                                    <div class="box">
                                                                        <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                        <img alt="a" title="a" src="{{$product->image_url}}">
                                                                        <p class="box_p">{{$product->name}}</p>
                                                                        <p class="box_p">Price：{{$product->price}}</p>
                                                                        </a>
                                                                    </div>
                                                                  @endforeach
                                                                </div>
                                                              <div class="paginate">
                                                                {{ $sadlle_results->links() }}
                                                              </div>

                                                            @elseif ($current_category_id === 5)
                                                              <div class="paginate">
                                                                {{ $seatpost_results->links() }}
                                                              </div>
                                                                <div class="wrap">
                                                                    @foreach($seatpost_results as $product)
                                                                      <div class="box">
                                                                          <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                          <img alt="a" title="a" src="{{$product->image_url}}">
                                                                          <p class="box_p">{{$product->name}}</p>
                                                                          <p class="box_p">Price：{{$product->price}}</p>
                                                                          </a>
                                                                      </div>
                                                                    @endforeach
                                                                  </div>
                                                                <div class="paginate">
                                                                  {{ $current_part_name->part_name}}　検索結果　:　{{ $seatpost_results->total() }}　件
                                                                  {{ $seatpost_results->links() }}
                                                                </div>
                                                                  @elseif ($current_category_id === 6)
                                                                    <div class="paginate">
                                                                      {{ $current_part_name->part_name}}　検索結果　:　{{ $pedal_results->total() }}　件
                                                                      {{ $pedal_results->links() }}
                                                                    </div>
                                                                      <div class="wrap">
                                                                          @foreach($pedal_results as $product)
                                                                            <div class="box">
                                                                                <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                                <img alt="a" title="a" src="{{$product->image_url}}">
                                                                                <p class="box_p">{{$product->name}}</p>
                                                                                <p class="box_p">Price：{{$product->price}}</p>
                                                                                </a>
                                                                            </div>
                                                                          @endforeach
                                                                        </div>
                                                                      <div class="paginate">
                                                                        {{ $pedal_results->links() }}
                                                            @elseif ($current_category_id === 6)
                                                              <div class="paginate">
                                                                {{ $pedal_results->links() }}
                                                              </div>
                                                                <div class="wrap">
                                                                    @foreach($pedal_results as $product)
                                                                      <div class="box">
                                                                          <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                          <img alt="a" title="a" src="{{$product->image_url}}">
                                                                          <p class="box_p">{{$product->name}}</p>
                                                                          <p class="box_p">Price：{{$product->price}}</p>
                                                                          </a>
                                                                      </div>
                                                                    @endforeach
                                                                  </div>
                                                                <div class="paginate">
                                                                  {{ $pedal_results->links() }}
                                                                </div>
                                                                      @elseif ($current_category_id === 7)
                                                                        <div class="paginate">
                                                                          {{ $current_part_name->part_name}}　検索結果　:　{{ $crank_results->total() }}　件
                                                                          {{ $crank_results->links() }}
                                                                        </div>
                                                                          <div class="wrap">
                                                                              @foreach($crank_results as $product)
                                                                                <div class="box">
                                                                                    <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                                    <img alt="a" title="a" src="{{$product->image_url}}">
                                                                                    <p class="box_p">{{$product->name}}</p>
                                                                                    <p class="box_p">Price：{{$product->price}}</p>
                                                                                    </a>
                                                                                </div>
                                                                              @endforeach
                                                                            </div>
                                                                          <div class="paginate">
                                                                            {{ $crank_results->links() }}
                                                                          </div>
                                                            @elseif ($current_category_id === 7)
                                                              <div class="paginate">
                                                                {{ $crank_results->links() }}
                                                              </div>
                                                                <div class="wrap">
                                                                    @foreach($crank_results as $product)
                                                                      <div class="box">
                                                                          <a href="https://www.chainreactioncycles.com/{{$product->click_url}}" target="_blank">
                                                                          <img alt="a" title="a" src="{{$product->image_url}}">
                                                                          <p class="box_p">{{$product->name}}</p>
                                                                          <p class="box_p">Price：{{$product->price}}</p>
                                                                          </a>
                                                                      </div>
                                                                    @endforeach
                                                                  </div>
                                                                <div class="paginate">
                                                                  {{ $crank_results->links() }}
                                                                </div>
                                              @endif
                </div>
            </div>
          </div>
       </div>
  </div>
</main>
</html>

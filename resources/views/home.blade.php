@extends('layouts.master')

@section('content')
          <div class="highlights">
            <div class="highlightsHolder">
              <h1>Onze aanbevelingen!</h1>
              <div class="mainHighlight">
                <div class="highlightHolder">
                  <a href="/products/{{ $highlight1[0]->id }}">
                    <div class="clickablehighlight">
                      Bekijken
                    </div>
                  </a>
                  <img class="highlightimg" src="/images/uploads/{{ $highlight1[0] -> imgurl }}">
                  <div class="titleholder">
                    {{ $highlight1[0] -> name }}
                  </div>
                </div>
              </div>
              <div class="secondaryHighlight">
                <div class="highlightHolder">
                  <a href="/products/{{ $highlight2[0]->id }}">
                    <div class="clickablehighlight">
                      Bekijken
                    </div>
                  </a>
                  <img class="highlightimg" src="/images/uploads/{{ $highlight2[0] -> imgurl }}">
                  <div class="titleholder">
                      {{ $highlight2[0] -> name }}
                  </div>
                </div>
                <div class="highlightHolder">
                  <a href="/products/{{ $highlight3[0]->id }}">
                    <div class="clickablehighlight">
                      Bekijken
                    </div>
                  </a>
                  <img class="highlightimg" src="/images/uploads/{{ $highlight3[0] -> imgurl }}">
                  <div class="titleholder">
                      {{ $highlight3[0] -> name }}
                  </div>
                </div>
              </div>
            </div>
              <div class="toproducts">
                  <a href="/products">
                    Bekijk hier al onze producten!
                  </a>
              </div>

          </div>

  @endsection

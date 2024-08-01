    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <h1 class="display-4">
                    @php
                        empty($averageRating) ? ($averageRating = 0) : ($averageRating = round($averageRating, 1));
                    @endphp
                    {{ $averageRating }}
                </h1>
                <p class="lead">dari 5.0</p>
                <div class="stars mb-3">
                    @empty($averageRating)
                        ☆☆☆☆☆
                    @else
                        @for ($i = 0; $i < floor($averageRating); $i++)
                            ★
                        @endfor
                        @if ($averageRating - floor($averageRating) >= 0.5)
                            ☆
                        @endif
                    @endempty
                </div>
                <p>
                    @empty($totalReviews)
                        0
                    @else
                        {{ $totalReviews }}
                    @endempty
                    Rating</p>
            </div>

            <div class="col-md-9">
                @foreach ([5, 4, 3, 2, 1] as $star)
                    <div class="d-flex align-items-center my-3">
                        <div class="col-md-10">
                            <div class="w-100 mr-2">
                                <div class="progress">
                                    <div class="progress-bar bg-primary"
                                        style="width:@empty($ratingsCount[$star])0 @else {{ ($ratingsCount[$star] / $totalReviews) * 100 }}@endempty%;"
                                        role="progressbar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <div style="font-size: 14px;">

                                @empty($ratingsCount[$star])
                                    0
                                @else
                                    {{ $ratingsCount[$star] }}
                                @endempty
                                Ulasan</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

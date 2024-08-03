@empty($averageRating)
@else
    @foreach ($reviews as $review)
        <div class="container mt-5">
            {{-- Row nama, bulan, dan ratingnya --}}
            <div class="row">
                <div class="bg-body-tertiary d-flex">
                    <div class="col-md-1 p-2">
                        <img src="{{ $review->users->profile }}" alt="">
                    </div>
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-5 text-start">
                                <strong>{{ $review->name }}</strong>
                            </div>

                            <div class="col-md-2 text-start">
                                <p class="text-secondary">
                                    @php
                                        $date_diff = date_diff(date_create($review->created_at), now());
                                    @endphp
                                    @if ($date_diff->y > 0)
                                        {{ $date_diff->y }} tahun yang lalu
                                    @elseif ($date_diff->m > 0)
                                        {{ $date_diff->m }} bulan yang lalu
                                    @elseif ($date_diff->d > 0)
                                        {{ $date_diff->d }} hari yang lalu
                                    @elseif ($date_diff->h > 0)
                                        {{ $date_diff->h }} jam yang lalu
                                    @elseif ($date_diff->i > 0)
                                        {{ $date_diff->i }} menit yang lalu
                                    @else
                                        Baru saja
                                    @endif
                                </p>
                            </div>

                            <div class="col-md-5 text-end">
                                <strong>{{ $review->rating_siswa_ke_guru }}</strong>
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $review->rating_siswa_ke_guru)
                                        ★
                                    @else
                                        ☆
                                    @endif
                                @endfor
                            </div>
                        </div>

                        <div class="row d-flex">
                            <div class="col-md-3 text-start text-secondary no-padding">
                                <p>Mata Pelajaran :</p>
                            </div>
                            <div class="col-md-7 text-start text-primary no-padding">
                                <p>{{ $review->nama_mapel }}</p>
                            </div>
                            <div class="review" style="font-weight: lighter; font-size: 18px;">
                                <p>{{ $review->komen_siswa_ke_guru }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endempty

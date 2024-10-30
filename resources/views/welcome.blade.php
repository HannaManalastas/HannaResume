<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hanna Manalastas Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
    <Style>
        img {
            width: 60%;
        }

        .h4 {
            margin-top: 10px;
            font-family: 'Times New Roman', Times, serif;
        }

        .h5 {
            margin-top: 5px;
            font-family: 'Times New Roman', Times, serif;
            font-weight: bolder;
        }

        p {
            margin-bottom: 9px;
            font-family: 'Times New Roman', Times, serif;
        }

        .container {
            box-shadow: 5px 5px 15px rgba(0, 0, 0, .5);
            border-radius: 10px;
            margin-top: 10px;
        }

        .education-container {
            margin-top: 10px;
        }

        .horizontal-line {
            width: 90%;
        }
    </Style>
    <div class="container-fluid" style="margin-top: 5px;">
        <div class="row">
            <div class="col-3 personal-info-container">
                <div class="container ">
                    <div class="row" style="height: 96vh;">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <img src="{{asset('HannaManalatasPicture.jpg')}}" alt="Image of Me">
                        </div>
                        <div class="col-12">
                            <h5 class="h5">{{$details->name}}</h5>
                        </div>
                        <hr class="mx-auto horizontal-line">
                        <div class="col-12">
                            <p><i class="fa-solid fa-house"></i> : {{$details->address}}</p>
                            <p><i class="fa-solid fa-phone"></i> : {{$details->contact}}</p>
                            <p><i class="fa-solid fa-envelope"></i> : {{$details->email}}</p>
                        </div>
                        <hr class="mx-auto horizontal-line">
                        <div class="col-12">
                            <div class="row">
                                <h4 class="h4">Personal Information</h4>
                                <div class="col-5">
                                    <p class="text-center"><strong>Date of Birth</strong></p>
                                    <p class="text-center"><strong>Place of Birth</strong></p>
                                    <p class="text-center"><strong>Age</strong></p>
                                    <p class="text-center"><strong>Sex</strong></p>
                                    <p class="text-center"><strong>Nationality</strong></p>
                                    <p class="text-center"><strong>Civil Status</strong></p>
                                    <p class="text-center"><strong>Height</strong></p>
                                    <p class="text-center"><strong>Weight</strong></p>
                                </div>
                                <div class="col-1">
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                    <p class="text-center"><strong>:</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="text-center">{{$personal->dateBirth}}</p>
                                    <p class="text-center">{{$personal->placeBirth}}</p>
                                    <p class="text-center">{{$personal->age}}</p>
                                    <p class="text-center">{{$personal->gender}}</p>
                                    <p class="text-center">{{$personal->nationality}}</p>
                                    <p class="text-center">{{$personal->civilStatus}}</p>
                                    <p class="text-center">{{$personal->height}}</p>
                                    <p class="text-center">{{$personal->weight}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row d-flex fljustify-content-center align-content-center">
                    <div class="col-12 objective-container">
                        <div class="container ">
                            <div class="row" style="height: 25vh;">
                                <h4 class="h4">OBJECTIVES</h4>
                                <div class="offset-1 col-10">
                                    <p>&emsp;&emsp;&emsp;{{$objectives->objective}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 education-container">
                        <div class="container ">
                            <div class="row" style="height: 68vh;">
                                <h4 class="h4" style="margin: 20px 0;">EDUCATIONAL BACKGROUND</h4>
                                <div class="col-12" style="margin-bottom: 27px;">
                                    <div class="row">
                                        @foreach($education as $education)
                                        @if($education->schoolLevel === 'College')
                                        <div class="offset-1 col-3">
                                            <p class="text-center"><strong>College</strong></p>
                                        </div>
                                        <div class="col-1">
                                            <p class="text-center"><strong>:</strong></p>
                                        </div>
                                        <div class="offset-1 col-6">
                                            <p><strong>{{ $education->schoolName }}</strong></p>
                                            <p>{{ $education->courseTaken }}</p>
                                            <p>{{ $education->schoolAddress }}</p>
                                            <p>{{ $education->academicYear }}</p>
                                        </div>
                                        @elseif($education->schoolLevel === 'Secondary')
                                        <div class="offset-1 col-3">
                                            <p class="text-center"><strong>Secondary</strong></p>
                                        </div>
                                        <div class="col-1">
                                            <p class="text-center"><strong>:</strong></p>
                                        </div>
                                        <div class="offset-1 col-6">
                                            <p><strong>{{ $education->schoolName }}</strong></p>
                                            <p>{{ $education->courseTaken }}</p>
                                            <p>{{ $education->schoolAddress }}</p>
                                            <p>{{ $education->academicYear }}</p>
                                        </div>
                                        @elseif($education->schoolLevel === 'Primary')
                                        <div class="offset-1 col-3">
                                            <p class="text-center"><strong>Primary</strong></p>
                                        </div>
                                        <div class="col-1">
                                            <p class="text-center"><strong>:</strong></p>
                                        </div>
                                        <div class="offset-1 col-6">
                                            <p><strong>{{ $education->schoolName }}</strong></p>
                                            <p>{{ $education->courseTaken }}</p>
                                            <p>{{ $education->schoolAddress }}</p>
                                            <p>{{ $education->academicYear }}</p>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
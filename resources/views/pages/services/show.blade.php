@extends('layouts.web')
@section('title', $service->title ?? "-")
@section('description', $service->meta_description  ?? "-")
@section('canonical', $service->canonical  ?? "-")

@section('content')

<style>
    /* Core CSS */
    .service-section h1 {
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-weight: 'semi-bold';
        font-size: 3rem;
        line-height: 3.25rem;
        margin: 1rem 0;
    }
    .service-section h2,h3 {
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-size: 2rem;
        line-height: 2rem;
        margin-top: 1rem;
        margin-bottom: 1rem;

    }
    .service-section p{
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .service-section a{
        --tw-text-opacity: 1;
        /* color: rgb(37 99 235/ var(--tw-text-opacity)); */
        font-weight: 700;
    }
    .service-section a:hover{
        --tw-text-opacity: 1;
        /* color: rgb(107 114 128 / var(--tw-text-opacity)); */
    }
    .service-section ul{
        color: #333;
        list-style-type: disc;
    }
    /* Mobile Size CSS */
    .service-section h1 {
        text-align: center;
    }
    .service-section ul{
        margin-left: 1rem;
    }
    /* md and greater screen size */
    @media (min-width: 768px) {
        .service-section h1 {
            text-align: left;
        }
        .service-section ul{
            margin-left: 2.5rem;
        }
    }
    /* sm and greater screen size  screen size */
    /* @media (min-width: 640px) {

    } */

</style>

<div class="bg-gradient-to-r from-primary-one to-primary-two px-4 lg:px-20">
    <div class="container mx-auto grid grid-cols-12 py-8 ">

        <div class="col-span-12 xl:col-span-9 text-3xl font-bold lg:font-medium lg:text-5xl text-white">
            {{$service->name}}
        </div>

       <div class="hidden xl:block text-white my-auto text-xl"><a href="{{ route('home') }} " class="hover:underline underline-offset-2">Home</a><i class="fa-solid fa-angle-right ml-4 text-sm"></i></div>
       <div class="hidden xl:block col-span-2 text-xl text-white my-auto ">{{ $service->name }}</div>
    </div>
</div>


<section class="container mx-auto py-8 px-4">
    <div class="flex flex-col lg:flex-row lg:space-x-8 lg:mx-8 space-y-6 lg:space-y-0">

        <div class="w-full lg:w-[65%] space-y-3 service-section">
            {!! $service->html !!}

            <div class="mt-6 flex flex-col justify-center items-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
                <a href="javascript:void(Tawk_API.toggle())" class="btn-pri">
                    Live Chat
                </a>
                <a href="{{ route('order') }}" class="btn-sec-2">
                    Order Now
                </a>
            </div>
        </div>

        <div class="w-full lg:w-[35%] mx-auto">
            <div class="mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg relative text-white rounded-[2.5rem] ">
                <div class=" text-center ">
                    <span
                        class="bg-gradient-to-tr from-primary-one to-primary-two relative top-3 md:text-2xl text-white text-sm font-bold  p-2 md:p-2 rounded px-4 lg:px-10">
                        Calculate <b>Your Price</b>
                    </span>
                </div>
                <div class="bg-[#174a4e] border-2 border-primary-one mx-auto sm:mx-0 rounded-[1rem] p-6 space-y-4">
                    <input type="hidden" name="paper_type" value="">

                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Academic Level</label>
                        <select name="academic_level" id="academic_level" class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Select Academic Level</option>
                            @foreach ($academic_levels as $academic_level)
                                <option {{ old('$academic_level') == $academic_level->id ? 'selected' : '' }}
                                    value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Deadline</label>
                        <select id="deadline" name="deadline" class="get-fare form-select">
                            <option hidden="" value="0" disabled="" selected="">Deadline</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-primary-two font-semibold">Number of Pages</label>
                        <select name="number_of_pages" id="no_of_pages" class=" form-select get-fare">
                            <option hidden="" value="0" disabled="" selected="">Number of Pages</option>
                            @for ($i = 1; $i <= 200; $i++)
                                <option  {{ old('number_of_pages') == $i ? 'selected' : '' }} value="{{ $i }}"  >{{ 250 * $i . ' Words ' . ' / ' . $i . ' Pages ' }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="flex flex-col mt-2 md:mt-5">
                        <label class="text-primary-two font-semibold">Paper Type</label>
                        <select name="paper_type" class=" form-select">
                            <option hidden="" value="0" disabled="" selected="">Select Document Type</option>
                            @foreach ($paper_types as $paper_type)
                                <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                                    value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                            @endforeach
                        </select>
                    </div>



                    <div class="flex flex-col space-y-4 lg:flex-row lg:space-y-0 lg:space-x-2 justify-between items-center text-black ">
                        <div class="border-primary-one border leading-[46px] py-1 text-white rounded w-full text-center ">
                            <span class="">Per Page: £ </span><span id="cost-per-page" >0 </span>
                        </div>
                        <div class="border-primary-one border leading-[46px] py-1 text-white rounded w-full text-center">
                            <span class="">Total: £ </span><span id="total-cost">0 .00</span>
                        </div>
                        <div class="bg-primary-one p-4 text-white rounded w-full text-center"><a href={{ route('order') }}>Order Now</a></div>
                    </div>

                </div>
            </div>

            <div
                class="sm:max-w-sm md:max-w-md lg:max-w-lg  mx-auto mt-8 px-9 rounded-tl-3xl rounded-br-3xl bg-gradient-to-r from-primary-one to-primary-two sm:px-14 md:p-4 ">
                <h4 class="text-white text-4xl font-semibold py-2 text-center">Free Features</h4>

                <ul class="my-3 space-y-5 ">

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Plagiarism Report</p>
                        <span class="text-center ">for <del class="font-bold">£20.00</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Formatting</p>
                        <span class="text-center">for <del class="font-bold">£12.81</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Title page</p>
                        <span class="text-center">for <del class="font-bold">£10.31</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Bibliography</p>
                        <span class="text-center">for <del class="font-bold">£18.31</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <p class="w-[38%]">Outline</p>
                        <span class="text-center">for <del class="font-bold">£9.65</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                    <li class="space-x-3 border-b pb-2 border-white border-dashed text-white flex justify-between">
                        <span class="w-[38%]">Limitless Amendments</span>
                        <span class="text-center">for <del class="font-bold">£14.31</del></span>
                        <strong class="float-right ">FREE</strong>
                    </li>

                </ul>

                <h4 class="text-white text-3xl font-semibold py-2 text-center">Get all these features for</h4>

                <div class="grid grid-cols-2 w-3/5 mx-auto">
                    <div class="mx-auto">
                        <span class="font-bold text-xl text-white"><del>£85.39</del></span>
                    </div>
                    <div class="mx-auto">
                        <span class="font-semibold text-xl text-white">FREE</span>
                    </div>
                </div>

                <div class="flex justify-center items-center pb-3">
                    <a href="{{ route('order') }}" class="btn-pri mt-4">
                        Order Now
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    <script>
        const fares = @json($fares);

        $(".get-fare").change(function() {
            const academic_level    = $('#academic_level').val();
            const deadline          = $('#deadline').val();
            const no_of_pages       = $('#no_of_pages').val() == null ? 1 : $('#no_of_pages').val();
            fares.forEach(fare => {
                if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
                    $('#cost-per-page').html(fare.per_page_price);
                    $('#total-cost').html(fare.per_page_price * no_of_pages);
                }
            });
        });
    </script>
@endsection

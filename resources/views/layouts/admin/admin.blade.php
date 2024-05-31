<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ReelList - Back Office</title>
</head>
<body class="flex bg-[#0F193A] font-roboto">
    @include('components.sidebar')
    <div class="w-full h-screen px-[52px] py-[60px]">
        <div class="flex gap-x-4 items-center">
            <button class="p-4 rounded-xl hover:bg-[#798CFF] focus:bg-[#2A29AA]">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 8H28V10.6667H4V8ZM4 14.6667H28V17.3333H4V14.6667ZM4 21.3333H28V24H4V21.3333Z" fill="white"/>
                </svg>
            </button>
            <h1 class="text-white text-3xl font-bold">Dashboard</h1>
        </div>
        <div class="flex gap-x-6 mt-10">
            <div class="flex flex-col w-full gap-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-contain bg-[#1E2745] p-8 gap-y-2 rounded-xl">
                        <h3 class="text-[#6A77A1]">Total User</h3>
                        <h4 class="text-white text-2xl font-bold">500</h4>
                    </div>
                    <div class="flex flex-col w-full h-contain bg-[#1E2745] p-8 gap-y-2 rounded-xl">
                        <h3 class="text-[#6A77A1]">Total Film</h3>
                        <h4 class="text-white text-2xl font-bold">500</h4>
                    </div>
                    <div class="flex flex-col w-full h-contain bg-[#1E2745] p-8 gap-y-2 rounded-xl">
                        <h3 class="text-[#6A77A1]">Total Genre</h3>
                        <h4 class="text-white text-2xl font-bold">500</h4>
                    </div>
                    <div class="flex flex-col w-full h-contain bg-[#1E2745] p-8 gap-y-2 rounded-xl">
                        <h3 class="text-[#6A77A1]">Total Review</h3>
                        <h4 class="text-white text-2xl font-bold">500</h4>
                    </div>
                </div>
                <div class="w-full h-contain bg-[#1E2745] p-8 rounded-xl">
                    <h2 class="text-2xl font-semibold text-white">Best rated movies</h2>
                    <table class="w-full table-auto mt-5">
                        <thead class="text-base text-white font-semibold">
                            <tr class="">
                                <td>No</td>
                                <td>Genre</td>
                                <td>Total Film</td>
                            </tr>
                        </thead>
                        <tbody class="text-[#6A77A1]">
                            <tr>
                                <td>1</td>
                                <td>Sci-Fi</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sci-Fi</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sci-Fi</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sci-Fi</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sci-Fi</td>
                                <td>200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-full bg-[#1E2745] p-8 rounded-xl overflow-y-auto">
                <h2 class="text-2xl font-semibold text-white">Best rated movies</h2>
                <table class="w-full h-full table-auto mt-5">
                    <thead class="text-base text-white font-semibold">
                        <tr class="">
                            <td>No</td>
                            <td>Title</td>
                            <td>Genre</td>
                            <td>Rating</td>
                        </tr>
                    </thead>
                    <tbody class="text-[#6A77A1]">
                        <tr>
                            <td>1</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Cibaduyut Revengers : Reign Of Fists</td>
                            <td>Sci-Fi</td>
                            <td>4.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>ReelList - Data User</title>
</head>
<body class="flex bg-[#0F193A] font-roboto">
    @include('components.sidebar')
    <div class="flex flex-col w-full h-screen gap-y-10 px-[52px] py-[60px]">
        <h1 class="text-white text-3xl font-bold">User Data</h1>
        <div class="h-screen bg-[#1E2745] p-8 rounded-xl">
            <table class="w-full h-full table-auto">
                <thead class="text-base text-white font-semibold">
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th class="w-[210px]">Action</th>
                    </tr>
                </thead>
                <tbody class="text-[#6A77A1]">
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>3</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>4</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>5</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>7</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>8</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>9</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>10</td>
                        <td>Bobby putransyah</td>
                        <td>bbyptrnsyah11@gmail.com</td>
                        <td>$2a$15$SET82jytXVFglD...</td>
                        <td>
                            @include('components.tableaction')
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
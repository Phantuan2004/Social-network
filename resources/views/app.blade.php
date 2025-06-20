<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon" type="image/png">

    <!-- title and description-->
    <title>Socialite</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <link href="{{ asset('vendor/syntax-highlighter/styles/shCore.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/syntax-highlighter/styles/shCoreMidnight.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="app"></div>

    <!-- Syntax Highlighter -->
    <script src="{{ asset('vendor/syntax-highlighter/scripts/shCore.js') }}"></script>
    <script src="{{ asset('vendor/syntax-highlighter/scripts/shBrushJScript.js') }}"></script>
    <script src="{{ asset('/vendor/syntax-highlighter/scripts/shBrushXml.js') }}"></script>
    <script>
        SyntaxHighlighter.all();
    </script>

    <!-- Ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/9046a62732.js" crossorigin="anonymous"></script>

    <!-- Chuyển đổi trạng thái nút button  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.querySelector('button[uk-toggle]');
            const chevronIcon = document.getElementById('chevron-icon');
            const seeMoreText = document.querySelector('.see-more-text');
            let isExpanded = false;

            button.addEventListener('click', function() {
                isExpanded = !isExpanded;

                // Rotate icon
                if (isExpanded) {
                    chevronIcon.style.transform = 'rotate(180deg)';
                    seeMoreText.textContent = 'See Less';
                } else {
                    chevronIcon.style.transform = 'rotate(0deg)';
                    seeMoreText.textContent = 'See More';
                }
            });
        });
    </script>
</body>

</html>

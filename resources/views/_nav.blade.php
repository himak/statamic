<header>
    <a href="{{ url('/') }}">
        <h1>Statamic</h1>
    </a>
    @antlers
        <nav>
            <ul>
                {{ nav include_home="true" }}
                <li>
                    <a href="{{ url }}">
                        {{ if is_current || is_parent }}
                            <strong>
                        {{ /if }}
                                {{ title }}
                        {{ if is_current || is_parent }}
                            </strong>
                        {{ /if }}
                    </a>
                </li>
                {{ /nav }}
            </ul>
        </nav>
    @endantlers
</header>

<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;

        > a {
            text-decoration: none;
            color: black;

            h1 {
                margin: 0;
            }
        }

        nav ul {
            display: flex;
            padding-left: 0;
            list-style: none;

            li {
                padding: 1em;

                a {
                    text-decoration: none;
                    color: black;
                }
            }
        }
    }
</style>




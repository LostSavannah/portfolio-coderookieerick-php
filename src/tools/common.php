<?PHP
    class CommonTools{
        static function get_minute():int{
            return (int)(time() / 60);
        }

        static function get_second():int{
            return (int)time();
        }

        static function get_current_redirect():string{
            $locations = [
                "https://dev.moradev.dev/portfolio-react",
                "https://dev.moradev.dev/portfolio-angular"
            ];
            return $locations[CommonTools::get_minute() % count($locations)];
        }

        static function get_current_style():string{
            $styles = [
                "bg-primary", "bg-success", "bg-danger", "bg-info"
            ];
            return $styles[CommonTools::get_second() % count($styles)];
        }
    }
?>
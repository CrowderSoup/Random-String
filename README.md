# Random-String

This is a simple PHP Script that will spit out a random string that defaults to
16 characters long. This default can be changed by passing a query string
paramemter called "len" and setting it to whatever length you require.

This is being used to generate random passwords right now, however it could
be used to generate random tokens for just about any purpose. To modify what
characters will show up in your random string simple modify the $str_vault
variable in the assign_rand_value() function. Then, also make sure that the
random number you generate in get_rand_id() won't be greater than the number of
character in $str_vault.
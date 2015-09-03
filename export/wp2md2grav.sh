#! /bin/bash

#####################################################################################################
#                                         == wpmd 2 grav ==                                         #
# This script converts the headers from wp2md to Grav headers format                                 #
# wp2md : https://github.com/dreikanter/wp2md ; with `wp2md -d ./ export.xml -ps {title}/item.md`   #
# Grav : http://getgrav.org/                                                                        #
# @author : Tom Canac http://tomcanac.com/                                                          #
# @version : 0.1                                                                                    #
# @licence : CC-BY                                                                                  #
#####################################################################################################

recursivity ()
{
   for item in *;
   do
        [ -e "$item" ] || continue
        if [ -d "$item" ]; then # If the current item is a sub-directory :
            cd "$item" || { echo "You don't have neccesary rights to go through $item" 1>&2; exit 1; }; # Go in it
            recursivity;
            cd .. || exit 1; # Go back to the previous directory, and do this again
        elif [ -f "$item" ] && [ "$target" = "$item" ]; then # If the current item is not a directory, and is named Thumbs.db :
            cp "$target" "$backupfile"; # Backup
            echo "\n" >> "$backupfile";
            num=1
            echo "---" > "$target";
            cat "$backupfile" | while read line
            do
                case $num in
                    6  ) echo "$line" | sed s/created/date/ >> "$target";; # We fix the date line
                    11 ) echo "taxonomy: \n category: blog \n---" >> "$target" ;; # Last header line, don't copy and end the header
                    2|3|4|5|7|8|9|10|12|13) echo "line $num deleted";; #nope
                    *  ) echo "$line" >> "$target" ;; # We keep the article
                esac
                num=$(($num + 1));
            done
            rm "$backupfile";
        fi
    done
}

target="item.md"
backupfile="backup_$target"

recursivity

exit 0

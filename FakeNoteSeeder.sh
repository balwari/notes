#!/bin/bash
# Run ./FakeNoteSeeder.sh command in terminal to execute multiple FakeJobsSeeder command
date +"%Y-%m-%d %T"
for ((i=1; i<=20; i++))
do 
./dock php php artisan db:seed --class=NoteTableSeeder
done
date +"%Y-%m-%d %T"
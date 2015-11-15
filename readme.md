# OpenACalendar StaticWeb Data: Elections And Referendums

Here is some real example data for OpenACalendar Static generator.

## To Build the site

You need PHP, git and composer.

```  
git clone https://github.com/OpenACalendar/OpenACalendar-StaticWeb-Core.git code
cd code
composer install
cd ..
git clone https://github.com/JMB-Technology-Limited/OpenACalendar-StaticWeb-Data-ElectionsAndReferendums.git data
php code/bin/OpenACalendarStaticWeb.php --build --site data --out  out --baseurl XXXX
```

Change base url to whatever

## To contribute more data

Fork this repository, make changes and make a pull request!

See the data/gb folder for an example.
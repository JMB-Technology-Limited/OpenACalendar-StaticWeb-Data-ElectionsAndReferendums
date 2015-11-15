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

### To add a new country

Make a new folder in _data_. The name doesn't actually matter, but a name that will help others find it later is good.

In that folder, make _data.ini_ and add:

```
[country]
code="GB"

[timezone]
timezone="Europe/London"
```

### To add a new event

In the folder for the country, add a file. The name can be anything with a _.ini_ extension. Add:

```
[event]
slug=gb_scottish_parliment_2016
title="Scottish Parliament election, 2016"
start=2016-05-05 
end=2016-05-05
description=""
url="https://en.wikipedia.org/wiki/Scottish_Parliament_election,_2016"
```

Slug is used to make up the url ( _/event/<slug>/_ ) and must be unique across the site. It should start with the country code, have the year and some other text in.

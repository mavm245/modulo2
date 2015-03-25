#!/usr/bin/perl

use strict;
use CGI::Carp qw(fatalsToBrowser);
use LWP::UserAgent;
use HTTP::Request;
use CGI qw(:standard);
print "Content-type:text/html\n\n";

my $result = new CGI;

#prueba
my $index = $result->param("index");
if ($index == 1){
my $url  = "http://45.55.135.210/drupal/?q=modrupal/json";
my $query = "index=1";

#llenado de los encabezados de la peticion
my $ua = LWP::UserAgent->new;
$ua->agent("Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)");
my $req = HTTP::Request->new(POST => $url);
$req->content_type('application/x-www-form-urlencoded');

#contenido del post
$req->content($query);

#contenido de la respuesta
my $response = $ua->request($req);
my $content = $response->content();
print $content;
}
else{
print "Que esperabas ver? ¬¬"
}

END

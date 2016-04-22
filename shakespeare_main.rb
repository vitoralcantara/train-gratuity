require_relative "shakespeare_analyzer"

begin
	table = Shakespeare_analyzer.parse(
		open("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml"))
	Pretty_printer.pretty(table)
rescue RuntimeError 
	puts "An error was found while parsing xml"
end

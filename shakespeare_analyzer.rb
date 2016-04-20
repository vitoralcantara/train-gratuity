require 'nokogiri'
require 'open-uri'

class Pair
  attr_accessor :name, :value
end

class Pair_Array

	def initialize
		@pair_array = Array.new
	end

	def add_or_update_element(name,count)
		@pair_array.each { |pair_element|  
			if name == pair_element.name
				pair_element.value += count
				return
			end
		}
		new_pair = Pair.new
		new_pair.name = name
		new_pair.value = count
		@pair_array.push(new_pair)
	end

	def print_elements
		@pair_array.each {|element|
			puts element.name + ' ' + element.value.to_s
		}
	end

end

pair_array = Pair_Array.new
doc = Nokogiri::XML(open("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml"))
speechs = doc.xpath("//SPEECH")
 speechs.each do |speech|
 	children = speech.children
 	if children[1].content != "ALL"
 		pair_array.add_or_update_element(children[1].content,children.length-1)
 	end
 	if children[1].content == "MACBETH"
 		puts (children.length-1).to_s
 	end

 end
 pair_array.print_elements
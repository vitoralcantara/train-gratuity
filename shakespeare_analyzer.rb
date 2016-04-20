require 'nokogiri'
require 'open-uri'

class Pair
  attr_accessor :name, :value
end

# class Pair_Array

# 	def initialize
# 		@pair_array = Array.new
# 	end

# 	def get_array
# 		return array
# end

class XML_Element_Count

	def self.parse(xml_url)
		pair_array = Array.new		
		doc = Nokogiri::XML(open("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml"))
		speeches = get_speeches(doc)
		speeches.each do |speech|
			children = speech.children
			speaker = get_speaker(children)
			if not is_all_speaker(speaker)
				line_count = get_line_count(children)
				sum_children(pair_array,speaker,line_count)
			end
		end
		return pair_array
	end

	private 

	def self.get_speeches(doc)
		return doc.xpath("//SPEECH")
	end

	def self.get_speaker(children)
		return children[1].content
	end


	def self.get_line_count(children)
			count = 0
			children.each do |child|
				if child.name == "LINE"
					count = count+1
				end
			end
			return count
	end

	def self.is_all_speaker(speaker)
		return speaker == "ALL"
	end

	def self.sum_children(pair_array,speaker,count)
		pair_array.each do |pair_element|  
			if speaker == pair_element.name
				pair_element.value += count
				return
			end
		end
		new_pair = Pair.new
		new_pair.name = speaker
		new_pair.value = count
		pair_array.push(new_pair)
	end

	def self.print_elements(array)
		array.each do |element|
			puts element.name + " " + element.value.to_s
		end
	end

end

pair_array = XML_Element_Count.parse("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml")
XML_Element_Count.print_elements(pair_array)


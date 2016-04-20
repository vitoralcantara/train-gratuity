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

	def self.parse(xml_url,category,child_type,exceptions)
		xml_url = Nokogiri::XML(open("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml"))		
		category = category
		child_type = child_name
		pair_array = Array.new		
		doc = Nokogiri::XML(open("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml"))
		category_list = get_categories(doc,category)
		category_list.each do |category|
			if not exception(category,exceptions)
				sum_children(pair_array,get_children_count(category,child_name))
			end
		return pair_array

	private 

	def self.get_categories(doc,category)
		return doc.xpath("//" + category)
	end

	def self.get_children_count(category,child_name)
			children = category.children
			count = 0
			children.each{|child|
				if child.name == child_name
					count++
				end
			}
			return count
	end

	def self.sum_children(pair_array,count)
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

end


XML_Element_Count.parse("http://www.ibiblio.org/xml/examples/shakespeare/macbeth.xml",
	"SPEECH","LINE")






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
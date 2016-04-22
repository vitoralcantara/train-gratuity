require_relative "shakespeare_analyzer"
require "test/unit"
 
class TestShakespeareParser < Test::Unit::TestCase
 
  def test_empty
  	base_hash = Hash.new
  	result_hash = Shakespeare_analyzer.parse("")
  	assert_equal(base_hash,result_hash)
  end
 
end

class User < ActiveRecord::Base
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable and :omniauthable
  validates_presence_of :first_name, :last_name
  devise :database_authenticatable, :registerable,
          :trackable, :validatable

  def full_name
    self.first_name + ' ' + self.last_name
  end
end

class User < ActiveRecord::Base
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable and :omniauthable
  validates_presence_of :first_name, :last_name
  devise :database_authenticatable, :registerable,
          :trackable, :validatable


end
